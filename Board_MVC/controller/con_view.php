<?php

include "../model/oopModel.php";

class controller {
    function view(){

        $board_id = $_GET['board_id'];
        $model = new oopModel();
        $result= $model->selectView($board_id);

        include "../view/board_view.php";

    }
}

$controller =new controller();
if($_GET['board_id']){
    $controller->view();
}

?>