<?php
include "dbConnect.php";
$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"chatting");
session_start();

$id=$_SESSION['id'];
$pw=$_SESSION['password'];
$name=$_SESSION['name'];
$alias=$_SESSION['alias'];

echo "<form method='post' action='make_room2.php'>";
echo "<center><h2> 채 팅 방 만 들 기 </h2></center>";

echo "<div style='text-align:right'>".$_SESSION['name']." 님 로그인 중..."."</div>";
echo "<div style='text-align : center' >"."방 제목: "."<input type='text' name='title' size='30'>"."&nbsp;"."<input type='submit' value='만들기!'>"."</div>";

echo "<br/>";
//echo "<div style='text-align : center' >"."<textarea id='contents' rows='10' cols='35' name='contents'>"."내용입력"."</textarea>"."</div>";
echo "</form>";




?>