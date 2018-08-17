<?php
include "dbConnect.php";
$mysql_handler = connectDB();
useDB($mysql_handler);


if(isset($_GET)){

$userid=$_GET[userid];
$userpassword=$_GET[userpassword];

    $sql = "select * from userinfo  where userid='$userid'";
    $result = mysqli_query($mysql_handler, $sql);
    $row=mysqli_fetch_array($result);
    $temp0=$row['userid'];

    $temp2=$row['password'];

    if($temp0==$userid){
     if($temp2==$userpassword){
         $sql2="delete from userinfo  where userid='$userid'";
         $result2 = mysqli_query($mysql_handler, $sql2);
         echo "<script>alert('삭제완료')</script>";
         echo "<script>location.replace('main.html')</script>";

     }else if($temp2!=$userpassword){
         echo "<script>alert('암호일치하지 않음')</script>";
         echo "<script> history.back();</script>";
     }
    }else if($temp0!=$userid) {
        echo "<script>alert('등록되지 않은 아이디 입니다')</script>";
        echo "<script> history.back();</script>";
    }



}
?>