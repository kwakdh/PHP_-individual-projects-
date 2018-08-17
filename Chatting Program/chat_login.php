<?php
/*session_destroy();
*/?>

<html>
<form method="post" action="<?$_SERVER['PHP_SELF']?>">

    ID : <input type="text" size="10" name="id">
    암호 : <input type ="password" size="10" name ="pw">
    <input type="submit" value="로그인" name="menu">
</form>
</html>


<?php
if($_POST['menu']==="로그인") {


    include "dbConnect.php";
    $mysql_handler = connectDB();
    mysqli_select_db($mysql_handler,"chatting");
    session_start();//세션시작

    $id = $_POST["id"];
    $pw = $_POST["pw"];

    $sql= "SELECT * FROM `chat_user` WHERE `id` = '$id' AND `password` = '$pw'";
    $result = mysqli_query($mysql_handler, $sql)or die("die");
    $row = mysqli_fetch_array($result);

    if ($row[0] == $id) {
        if ($row[1] == $pw) {
            $_SESSION['id'] = $row[0];
            $_SESSION['password'] = $row[1];
            $_SESSION['name'] = $row[2];
            $_SESSION['alias'] = $row[3];
            header("location:chat_list.php");
        }else if($row[1] != $pw){
            echo"<script>alert('비밀번호 오류....! ')</script>";
        }
    }
    else {
        echo"<script>alert('로그인 실패!')</script>";
    }

    //echo "로그인 비선택";
    mysqli_close($mysql_handler);

}

?>