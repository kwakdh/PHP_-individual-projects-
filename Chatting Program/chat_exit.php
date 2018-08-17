<?php
include "dbConnect.php";
$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"chatting");
session_start();//세션시작

$id=$_SESSION['id'];
$pw=$_SESSION['password'];
$name=$_SESSION['name'];
$alias=$_SESSION['alias'];

$room_num=$_GET['room_num'];
$sql_pri="SELECT * FROM `chat_user` WHERE `name` = '$name'" ;

$result_pri=mysqli_query($mysql_handler, $sql_pri);
$row_pri=mysqli_fetch_array($result_pri);
$priority=$row_pri['user_priority'];
$user_room_num=$row_pri['room_num'];
$bangjang=$row_pri['bangjang'];

// --------------------- 방장일 경우.... !!!! ----------------------

if(($bangjang==1)&&($room_num == $user_room_num)) {
//-------------------- 채팅방  지우기 -----------------------

    $sql_d = "DELETE FROM `all_room` WHERE `room_num` = $room_num";
    mysqli_query($mysql_handler, $sql_d) or die("die");

//-------------------- 권한 설정 -----------------------------


    try {
        $sql_member2 = "UPDATE `chat_user` SET `room_num`=0 ,`user_priority`=0 WHERE `name` = '$name'";

        mysqli_query($mysql_handler, $sql_member2);
    }catch (Exception  $e) {

        echo $e->getMessage();
    }

//-------------------채팅 내용 지우기 --------------------------

    $sql_d2 = "DELETE FROM `all_contents` WHERE `room_num` = $room_num";
    mysqli_query($mysql_handler, $sql_d2) or die("die");

    echo "<script>location.replace('chat_list.php')</script>";}



// ----------------- 방장이 아닌 경우.... !!!! ----------------------
else if(($bangjang!=1) && ($room_num == $user_room_num)){

    $sql_member = "SELECT * FROM `chat_user` WHERE `name` = '$name' ";
    mysqli_query($mysql_handler, $sql_member) or die("die2");

    $sql_member2 = "UPDATE `chat_user` SET `room_num`=0 ,`user_priority`= 0 WHERE `name` = '$name'";
    mysqli_query($mysql_handler, $sql_member2);

    $sql_up0="SELECT * FROM `all_room`";
    mysqli_query($mysql_handler,$sql_up0)or die("die4");

    $sql_up="UPDATE `all_room` SET `num_people`=`num_people`-1 WHERE `room_num` = $room_num";
    mysqli_query($mysql_handler,$sql_up)or die("die4");

    echo "<script>location.replace('chat_list.php')</script>";

}
?>