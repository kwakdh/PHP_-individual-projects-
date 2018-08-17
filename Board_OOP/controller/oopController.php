<?php

include "../model/oopModel.php";

class controller{
    function __construct(){
        session_start();
    }
    function login(){
        $model = new oopModel();

        $id=$_POST['id'];
        $password= $_POST['password'];

        $result=$model->selectID($id,$password);
        while ($row=mysqli_fetch_array($result)){
            echo $row[0];
            echo $row[1];

        }
       /* if(){

        }*/
    }
}
$controller = new controller();
if(isset($_POST['id'])){
    $controller-> login();
}


?>