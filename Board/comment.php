<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>다희의 게시판</title>

    <!-- 부트스트랩 -->
    <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <br />
</head>
<body>
<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
session_start();
$user_id= $_SESSION['user_id']; //세션 넣을 부분
$user_name= $_SESSION['name'];

include('dbconnect.php');

$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"new");
//selectDB($mysql_handler);

$board_id=$_GET['board_id'];
$contents = $_POST['comment'];

$reg_date = date("Y-m-d H:i:s");

 //$sql="select * from board where board_id=$board_id";
 //$result=mysqli_query($mysql_handler,$sql);

 $board_pid=$board_id;

$sql2 = "INSERT INTO board 
                  (board_pid, user_id, user_name, subject, contents, reg_date)
          VALUES ('$board_pid', '$user_id', '$user_name', '0', '$contents', '$reg_date')";
echo "<br/>".$sql2;
$result2=mysqli_query($mysql_handler,$sql2);




echo "<script>location.replace('listup.php?board_id=$board_id')</script>";



 ?>