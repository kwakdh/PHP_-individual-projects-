<?php

include "../model/oopModel.php";

class controller {

        function input(){

            $subject=$_POST['subject'];
            $contents=$_POST['contents'];

            $model = new oopModel();
            $model ->inputBoard($subject,$contents);
            $result=$model->select();

            include "../view/list.php";

        }
    }
$controller = new controller();

if (isset($_POST['subject'])) {
    $controller->input();
}
?>