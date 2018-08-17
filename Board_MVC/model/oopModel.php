<?php

class oopModel
{
    private $con;

    function __construct(){
        $this->con = mysqli_connect('localhost', 'root', 'autoset', 'new_board');
    }

    //select 문
    function select(){
        if (func_num_args() == 0) {
            $sql = "SELECT * FROM `board`";
            $result = mysqli_query($this->con, $sql);
        }
     return $result;
    }

    //글 보기
    function selectView($board_id){

            $sql = "SELECT * FROM `board` WHERE board_id=$board_id";
            $result = mysqli_query($this->con,$sql);

        return $result;
    }

    //글 페이지네이션
    function pageNation(){
        $start_num = func_get_args()[0];
        $sql = "select * from `board` limit $start_num,10";
        $result = mysqli_query($this->con,$sql);

        return $result;

    }

    //게시판 글 입력
    function inputBoard($subject,$contents){

        $sql = "INSERT INTO `board`(`user_id`, `user_name`, `subject`, `hits`, `textarea`)
                 VALUES ('dahui','dahui2','$subject',1,'$contents')";
        mysqli_query($this->con,$sql);

    }

    //게시판 글 수정
    function rewriteBoard($board_id){

    }

    //로그인일 경우
    function login_select(){
         $sql ="SELECT * FROM `member`";
         $result = mysqli_query($this->con,$sql);

         return $result;
    }
}
?>