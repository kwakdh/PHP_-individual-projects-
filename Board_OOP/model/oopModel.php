<?php
class oopModel{
    private $con;
    function __construct(){
        $this->con = mysqli_connect("localhost","root","autoset","new_board");
    }
    function select(){
        $sql = "select & from `member`";

    }
    function selectID($id,$password)
    {
        $sql = "SELECT * FROM `member` where id='$id' and password ='$password'";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

}

?>