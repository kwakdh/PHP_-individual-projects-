<?php

include "../model/oopModel.php";

class controller {

    function login(){
        session_start();
        $id=$_POST['id'];
        $pw=$_POST['pw'];

        $model = new oopModel();
        $result = $model ->login_select();

      /*if ($row[0] == $id) {
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
      }*/


  }

}
//객체 생성
$controller = new controller();

if (isset($_POST['id'])) {
    $controller->login();
}