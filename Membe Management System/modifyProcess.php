<?php
include "dbConnect.php";
$mysql_handler = connectDB();
useDB($mysql_handler);

$userid=$_GET[userid];



$sql ="select * from userinfo where userid='$userid'";
$result=mysqli_query($mysql_handler,$sql);
$row=mysqli_fetch_array($result);
$temp0=$row['userid'];
$temp1=$row['name'];
$temp2=$row['password'];
$temp4=$row['gender'];
$temp3=$row['classification'];
$temp5=$row['phone'];
$temp6=$row['email'];

if($temp0==$userid) {


    echo "<b>수정할 ID를 입력하세요</b><br>";
    echo "<body>";

    echo "ID:<input type='text' name='userid' value='$userid'>";

    echo "<form action='modifyProcess2.php?userid=$userid' method='post'>";
    echo "<ol>";
    echo "<li>" . "사용자 ID: <input type='text' name='userid' value='$userid'>" . "</li>";
    echo "<li>" . "이름: <input type='text' name='username' value='$temp1'>" . "</li>";
    echo "<li>" . "암호: <input type='text' name='userpassword' value='$temp2'></li>";

   if($temp3=='student') {
       echo "<li>" . "구분: <select name='classification'>
            <option value='student' selected>학생</option>
            <option value='staff'>교직원</option>
        </select></li>";
   }else if($temp3=='staff'){
       echo "<li>" . "구분: <select name='classification'>
            <option value='student' >학생</option>
            <option value='staff' selected>교직원</option>
        </select></li>";
   }

  //  echo "<li>" . "성별: <input type='text' name='gender' value='$temp4'></li>";

    if($temp4=='female') {
        echo " <li>성별: <select name='gender'>
            <option value='male'>남성</option>
            <option value='female' selected>여성</option>
        </select></li>";
    }else if($temp4=='male'){
        echo " <li>성별: <select name='gender'>
            <option value='male' selected>남성</option>
            <option value='female' >여성</option>
        </select></li>";
    }


    echo "<li>" . "전화번호: <input type='text' name='phone' value='$temp5'></li>";
    echo "<li>" . "이메일: <input type='text' name='email' value='$temp5'></li>";
    echo "<li><input type='submit' value='수정하기' </li>";


    echo "</ol>";
    echo "</form>";

    echo "</body>";
}else if($temp0!=$userid){
    echo "<script>alert('ID를 찾을 수없습니다.')</script>";
}
?>