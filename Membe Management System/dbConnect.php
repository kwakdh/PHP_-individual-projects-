<?php

function connectDB(){

    $mysql_handler=mysqli_connect('localhost','root','autoset');
    return $mysql_handler;
}
function useDB($mysql_handler){
    mysqli_select_db($mysql_handler,'midtermexam');
}

function close($mysql_handler){
    $mysql_handler->close();
}



?>