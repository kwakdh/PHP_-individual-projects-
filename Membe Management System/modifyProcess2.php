<?php
include "dbConnect.php";
$mysql_handler = connectDB();
useDB($mysql_handler);

$userid=$_GET[userid];

if(isset($_POST)) {

    $userid=$_POST['userid'];
    $username=$_POST['username'];
    $userpassword=$_POST['userpassword'];
    $classification=$_POST['classification'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    if($_POST[userid]==''||$_POST[username]==''||$_POST[userpassword]==''||$_POST[classification]==''||$_POST[gender]==''||$_POST[phone]==''||$_POST[email]=='') {

        echo "<script>alert('아래 항목은 필수 항목 입니다.')</script>";
        echo "<script> history.back();</script>";
    }
    else{
        $sql = "select * from userinfo  where userid='$userid'";
    $result = mysqli_query($mysql_handler, $sql);

    $sql = "update userinfo set userid='$userid',name='$username'
      ,classification='$classification',gender='$gender',password='$userpassword',
      phone='$phone',email='$eamil'
   where userid='$userid'";
    $result = mysqli_query($mysql_handler, $sql);

    echo "<script>alert('수정완료')</script>";
    echo "<script>location.replace('main.html')</script>";
}
}
?>