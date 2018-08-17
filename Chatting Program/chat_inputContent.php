<?php
include "dbConnect.php";
$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"chatting");
session_start();//세션시작

$id=$_SESSION['id'];
$pw=$_SESSION['password'];
$name=$_SESSION['name'];
$alias=$_SESSION['alias'];

$room_num=$_GET['room_num']; //get 방식 불러오기
if (isset($_POST['inputCotent'])) {

$inputCotent=$_POST['inputCotent'];

$sql2="INSERT INTO `all_contents` (`room_num`, `name`, `contents`) VALUES ($room_num,'$name','$inputCotent')";
$result2=mysqli_query($mysql_handler,$sql2)or die("die");



echo "<script>location.replace('already_room.php?room_num=$room_num')</script>";


}
?>