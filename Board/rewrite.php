
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
    <center><h1>게 시 글 수 정</h1></center><br/>
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
$id=$_SESSION['user_id'];
$pw=$_SESSION['password'];
$name=$_SESSION['name'];

$board_id=$_GET['board_id'];


echo "<div style='text-align:right'>".$_SESSION['name']."님이 로그인 하셨습니다"."</div>";



include('dbconnect.php');

$mysql_handler = connectDB();
mysqli_select_db($mysql_handler,"new");
//selectDB($mysql_handler);

$sql ="select * from board where board_id='$board_id'";
$result = mysqli_query($mysql_handler,$sql);
$row = mysqli_fetch_array($result);
$contents2= $row['contents'];


echo "<center>";
echo "<div class='container'>
	
	<form class='form-horizontal' action='rewrite2.php?board_id=$board_id' method='post'>
	  <div class='form-group''>
	    <label for='Email3' class='col-sm-2 control-label'>제 목</label>
	    <div class='col-sm-10'>
	      <input type='text' class='form-control' style='width: 40%' name='subject' value=$row[subject]>
	    </div>
	  </div>
	  <div class='form-group'>
	    <label for='Password3' class='col-sm-2 control-label'>내 용</label>
	    <div class='col-sm-10'>
	     <textarea name='contents' class='form-control' style='width: 40%' rows='15'>$contents2</textarea><br/>
	             </div>
	   </div>
	  <div class='form-group'>
	    <label for='Password3' class='col-sm-2 control-label'>비밀번호</label>
	    <div class='col-sm-10'>
	      <input type='password' class='form-control' style='width: 40%'  name='pw' placeholder='password'>
	    </div>
	  </div>

	  </div>
	  <br />
	  <div class='form-group'>
	    <div class='col-sm-offset-2 col-sm-10'>
	      <button type='submit' class='btn btn-default'>modified</button>
	      &nbsp;
	      <input type='button' value='back' class='btn btn-default' onclick=location.href='listup.php?board_id=$board_id'>
	    </div>
	  </div>
	</form>
</div>";
echo "</center>";


