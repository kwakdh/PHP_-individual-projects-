<?php

include "../model/oopModel.php";

class controller {
    function page(){

        $page = $_GET['page'];
        $start = ($page-1)*10;
        $model = new oopModel();
        $result= $model->select();
        $totalPage = ceil(mysqli_num_rows($result)/10);
        $result = $model ->pageNation();
        $count = mysqli_num_rows($result);
        $firstPage = ((int)(($page-1)/5)*5)+1;
        $lastPage = (int)($firstPage+4);

        include "../view/page.php";

    }

}

$controller =new controller();
if(isset($_GET['page'])){
    $controller->page();
}

?>