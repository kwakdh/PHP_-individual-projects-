<?php

define("HOST","127.0.0.1");
define("USER", "root");
define("PASSWORD", "autoset");
define("DB_NAME2", "chatting");


//echo mysqli_connect_error();
function connectDB()
{
    $mysql_handler = mysqli_connect(HOST, USER, PASSWORD);

    return $mysql_handler;

}
//--------------------------데이터 베이스 생성------------------------------

function selectDB($mysql_handler)
{
    mysqli_select_db($mysql_handler,DB_NAME2);

}
function close( $mysql_handler)
{
    $mysql_handler->close();
}

?>