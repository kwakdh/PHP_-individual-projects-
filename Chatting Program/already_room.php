<?php

include "dbConnect.php";
$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"chatting");
session_start();//세션시작

$id=$_SESSION['id'];
$pw=$_SESSION['password'];
$name=$_SESSION['name'];
$alias=$_SESSION['alias'];

echo "<center><h2> 채 팅 중 ... </h2></center>";
echo "<div style='text-align:right'>".$_SESSION['name']." 님 로그인 중..."."</div>";

$room_num=$_GET['room_num']; //get 방식 불러오기
//------------------------------채팅 입장한 사람 --------------------------------
$sql_member = "SELECT * FROM `chat_user` WHERE `name` = '$name' ";
$result_mem=mysqli_query($mysql_handler,$sql_member)or die("die2");
$row_list=mysqli_fetch_array($result_mem);
$bangjang=$row_list['bangjang'];

if($bangjang==NULL){

    $sql_member2 = "UPDATE `chat_user` SET `room_num`=$room_num ,`user_priority`=(CASE WHEN `user_priority` IS NULL OR `user_priority`='' THEN 0 ELSE `user_priority` END)+1 WHERE `name` = '$name'";
    mysqli_query($mysql_handler, $sql_member2);

}
if($bangjang==1){

    $sql_member2 = "UPDATE `chat_user` SET `room_num`=$room_num  WHERE `name` = '$name'";
    mysqli_query($mysql_handler, $sql_member2);

}

// 접속자 수 ......
$sql_su = "SELECT * FROM `chat_user` WHERE `room_num` = $room_num ";
$result_su=mysqli_query($mysql_handler,$sql_su)or die("die3");
$people_su=$result_su->num_rows;

$sql_up0="SELECT * FROM `all_room`";
mysqli_query($mysql_handler,$sql_up0)or die("die4");

$sql_up="UPDATE `all_room` SET `num_people`=$people_su WHERE `room_num` = $room_num";
mysqli_query($mysql_handler,$sql_up)or die("die4");

// ----------------------------- 대화 목록 -------------------------------------

echo "<center>";
echo "<table rules='none' width='600' cellpadding='5' cellspacing='0' border='1' align='center' style='border-collapse:collapse; border:1px hotpink solid;'>";


$sql_list = "SELECT * FROM `all_contents` WHERE `room_num` = $room_num";
$result_list = mysqli_query($mysql_handler,$sql_list)or die("die");

while ($row_list=mysqli_fetch_array($result_list)){

    echo "<tr>";
    echo "<td>".$row_list['name']."님 "."</td>";
    echo "<td>".$row_list['contents']."</td>";
    echo "</tr>";

}

echo "</center>";
echo "</table>";
// ------------------------------ 채팅글 작성 -----------------------------------

echo "<form action='chat_inputContent.php?room_num=$room_num' method='post'>";
echo $name."님   ";
echo "<input type='text' name='inputCotent' id='inputCotent' class='form-control' style='width: 45%'  placeholder='Input your contents' >";
echo "&nbsp;<input type='submit' value='submit'>";
echo "&nbsp;<input type='button' value='exit!!' onclick=\"location.href='chat_exit.php?room_num=$room_num'\">";

echo "</form>";



?>