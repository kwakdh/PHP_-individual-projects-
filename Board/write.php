<?php

session_start();


include('dbconnect.php');

$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"new");
//selectDB($mysql_handler);


if($_SERVER["REQUEST_METHOD"]=="POST"){

$board_id=0;
$board_pid=0;
$user_id= $_SESSION['user_id']; //세션 넣을 부분
$user_name= $_SESSION['name']; //세션 넣을 부분
$subject = $_POST['subject'];
$contents = $_POST['contents'];
$hits=0; //게시물당 접속자수
$reg_date = date("Y-m-d H:i:s");


$sql= "SELECT * FROM board";
mysqli_query($mysql_handler,$sql);

$sql = "INSERT INTO board VALUES ( \"" . $board_id . "\",$board_pid, \"" . $user_id . "\",
         \"" . $user_name . "\", \"" . $subject . "\",\"" . $contents . "\",$hits,\"" . $reg_date . "\")";


mysqli_query($mysql_handler,$sql) or die ($mysql_handler);


}


close($mysql_handler);
echo "<script>location.replace('list.php?page=1')</script>";



?>