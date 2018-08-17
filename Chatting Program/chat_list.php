<?php

include "dbConnect.php";
$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"chatting");
session_start();//세션시작

$id=$_SESSION['id'];
$pw=$_SESSION['password'];
$name=$_SESSION['name'];
$alias=$_SESSION['alias'];
echo "<center><h2> 채 팅 방 리 스 트 </h2></center>";
echo "<div style='text-align:right'>".$_SESSION['name']." 님 로그인 중..."."</div>";
echo "<div style='text-align:right'>"."<input type='button' value='방 만들기' onclick=\"location.href='make_room.php'\">"."&nbsp;"."<input type='button' value='로그아웃' onclick=\"location.href='chat_login.php'\">"."</div>";
echo "<br />";
echo "<br />";

//------------------------- 방 전체 sql-----------------------------

$sql1 = "SELECT * FROM `all_room`";
$result1 = mysqli_query($mysql_handler, $sql1)or die("die");


//--------------------------- 방 전체 리스트-----------------------

echo "<center>";
echo "<table rules='none' width='600' cellpadding='5' cellspacing='0' border='1' align='center' style='border-collapse:collapse; border:1px hotpink solid;'>";

echo "<tr>";
echo "<td>방번호</td><td>방제목</td><td>방장</td><td>작성일</td><td>인원수</td>";
echo "</tr>";
while($row1= mysqli_fetch_array($result1)){
    //$count_su=$row1['num_people'];
    $bang_name = $row1['name'];

        echo "<tr>";
        echo "<td>".$row1['room_num']."</td>";
        echo "<td><a href='already_room.php?room_num=$row1[room_num]'>".$row1['chat_title']."</a></td>";
        echo "<td>".$row1['alias']."</td>";
        echo "<td>".$row1['reg_date']."</td>";
        echo "<td>".$row1['num_people']."</td>";
        echo "</tr>";
     //접속자와 방장이 다를 경우 .... !?
     /*if($name !=  $row1['name']){
        $sql2= "UPDATE `all_room` SET `num_people`=`num_people`+1 WHERE`name` = '$bang_name' ";
        mysqli_query($mysql_handler, $sql2)or die("die");
       break;
     }*/

}

echo "</center>";
echo "</table>";

?>