<?php

include "../model/oopModel.php";

class  controller{
    function rewrite(){

        $subject=$_POST['subject'];
        $contents=$_POST['contents'];
        $board_id = $_GET['board_id'];
        $model = new oopModel();
        $result= $model->rewriteBoard($subject,$contents,$board_id);

        include "../view/board_rewrite.php";

    }
}

$controller = new controller();
if($_GET['board_id']){
    $controller->rewrite();
}
?>