<?php

include "dbConnect.php";
$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"chatting");
session_start();

$id=$_SESSION['id'];
$pw=$_SESSION['password'];
$name=$_SESSION['name'];
$alias=$_SESSION['alias'];

if (isset($_POST['title'])) {

    $title = $_POST['title'];

    $sql = "INSERT INTO `all_room` (`name`, `alias`, `chat_title`, `num_people`, `reg_date`)
                         VALUES ('$name','$alias','$title', 1, CURRENT_TIMESTAMP)";
    mysqli_query($mysql_handler, $sql)or die("die1");

    $sql1_1 = "SELECT * FROM `all_room` WHERE `name` = '$name' ";
    $result = mysqli_query($mysql_handler, $sql1_1)or die("die1");
    $row= mysqli_fetch_array($result);
    $room_num=$row['room_num'];

    // 채팅 사람 update
    $sql2 = "SELECT * FROM `chat_user` WHERE `name` = '$name' ";
    mysqli_query($mysql_handler, $sql2)or die("die2");

    try {
        $sql3 = "UPDATE `chat_user` SET `room_num`=$room_num ,`user_priority`=1 ,`bangjang`=1 WHERE `name` = '$name'";
         mysqli_query($mysql_handler, $sql3);
    }
    catch (Exception  $e){

        echo $e->getMessage();
    }

    echo "<script>alert('방개설 완료 !')</script>";
    echo "<script>location.replace('chat_list.php')</script>";


}
?>