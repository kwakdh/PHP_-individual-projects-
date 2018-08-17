<?php

include "dbConnect.php";
$mysql_handler = connectDB();
useDB($mysql_handler);

if(isset($_POST)){

    $sysid =0;
    $userid=$_POST[userid];
    $password=$_POST[userpassword];
    $name=$_POST[username];
    $password=$_POST[userpassword];
    $classification=$_POST[classification];
    $gender=$_POST[gender];
    $phone=$_POST[phone];
    $email=$_POST[email];

    if($_POST[userid]==''||$_POST[username]==''||$_POST[userpassword]==''||$_POST[phone]==''||$_POST[email]==''){
        echo "값이 안들어 가있다"."<br>"."<br>";
        if($_POST[userid]==''){
            echo "아이디"."&nbsp;";
        }
        if($_POST[username]==''){
            echo "이름"."&nbsp;";
        }
        if($_POST[userpassword]==''){
            echo "비밀번호"."&nbsp;";
        }

        if($_POST[phone]==''){
            echo "휴대폰"."&nbsp;";
        }
        if($_POST[email]==''){
            echo "이메일"."&nbsp;";
        }
        echo " 빈칸 되어 있음...!!!"."<br>"."<br>";

        echo "<button><a href='register.html'>back</a></button>";
    }
    else {

        $sql = "INSERT INTO userinfo VALUES($sysid ,\"" . $userid . "\",\"" . $classification . "\",\"" . $name . "\",\"" . $gender . "\",\"" .
            $password . "\",\"" . $phone . "\",\"" . $email . "\")";

        $result = mysqli_query($mysql_handler, $sql);


        echo "<script>location.replace('main.html')</script>";
    }
}

//close($mysql_handler);

?>