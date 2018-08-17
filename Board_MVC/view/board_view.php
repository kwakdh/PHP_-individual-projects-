<html>
<head><title>board_view</title></head>
<!-- 부트스트랩 -->
<link href="http://localhost/css/bootstrap.min.css" rel="stylesheet">

<!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
<!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<br />
<center><h3>게 시 판 보 기</h3></center><br/>
<body>
<table class='table table-striped table-bordered table-hover' >
 <?php
 while($row=mysqli_fetch_array($result)){
     $board_id= $row['board_id'];

     echo "<tr> "."<td>"."제목 : ".$row[3]."</td>"."</tr>";
     echo "<tr> "."<td>"."작성자 : ".$row[2]."</td>"."</tr>";
     echo "<tr> "."<td>"."작성일시 : ".$row[5]."</td>"."</tr>";
     echo "<tr> "."<td>"."내용 : ".$row[6]."</td>"."</tr>";

 }

?>
</table>

<?php

echo "<center>";
echo "<input type='button' class='btn btn-default' value='back' onclick=location.href='../view/list.php'>"."&nbsp";

echo"<input type='button' class='btn btn-default' value='rewrite' onclick=location.href='../controller/con_rewrite.php?board_id=$board_id'>"."&nbsp";
echo "<input type='button' class='btn btn-default' value='delete' onclick=location.href=' ../controller/con_view.php'>";
echo "</center>";

?>
</body>
</html>
