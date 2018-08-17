<?php

class db_info
{
    const db_url = "localhost";
    const user_id = "root";
    const password = "autoset";
    const db = "test";
}

// 디비 연결하기
$conn = mysqli_connect(db_info::db_url, db_info::user_id, db_info::password,db_info::db);

if($conn->connect_error){
    echo "Failed to connect to MySQL".$conn->connect_error;
}

$ID=0;
if(isset($_POST)) {
    if ($_REQUEST['voting'] == null) {
        echo "<script>alert('투표해 주세요 ')</script>";
        echo "<script> history.back();</script>";

    } else {

        $sql = "select * from voteresult";
        mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $ID = $row['id'];
        }
        $sql2 = "";
        if ($_REQUEST['voting'] == 'hong') {

            $sql2 = "update voteresult set rate=(CASE WHEN rate IS NULL OR rate='' THEN 0 ELSE rate END)+1 WHERE id = 1";
            mysqli_query($conn, $sql2);



        } else if ($_REQUEST['voting'] == 'seong') {
            $sql2 = "update voteresult set rate=(CASE WHEN rate IS NULL OR rate='' THEN 0 ELSE rate END)+1 WHERE id = 2";
            mysqli_query($conn, $sql2);


        } else if ($_REQUEST['voting'] == 'lee') {

            $sql2 = "update voteresult set rate=(CASE WHEN rate IS NULL OR rate='' THEN 0 ELSE rate END)+1 WHERE id = 3";
            mysqli_query($conn, $sql2);


        }

        // id =1 일때 rate 개수
        $sqlR_1= "select * from voteresult where id=1";
        $resultR_1 = mysqli_query($conn, $sqlR_1) or die("Error: " . mysqli_error($conn));

        $record_1 =$resultR_1->fetch_row();
        $record_1_r=$record_1[2];
        //echo $rr1."<br>";


        // id =2 일때 rate 개수
        $sqlR_2= "select * from voteresult where id=2";
        $resultR_2 = mysqli_query($conn, $sqlR_2) or die("Error: " . mysqli_error($conn));

        $record_2 =$resultR_2->fetch_row();
        $record_2_r=$record_2[2];


        // id =3 일때 rate 개수
        $sqlR_3= "select * from voteresult where id=3";
        $resultR_3 = mysqli_query($conn, $sqlR_3) or die("Error: " . mysqli_error($conn));

        $record_3 =$resultR_3->fetch_row();
        $record_3_r=$record_3[2];


        //합계 개수
        $sql4= "select * from voteresult";
        $result4 = mysqli_query($conn, $sql4) or die("Error: " . mysqli_error($conn));

        $sum=0;
        while ($row = mysqli_fetch_array($result4)){
            $value = $row['rate'];

            $sum += $value;
        }
        //id =1 일때 퍼센테이지
        $rate_1=($record_1_r/$sum)*100;
        $rr1=number_format((float)$rate_1, 2, '.', '');

        //id =2 일때 퍼센테이지
        $rate_2=($record_2_r/$sum)*100;
        $rr2=number_format((float)$rate_2, 2, '.', '');

        //id =3 일때 퍼센테이지
        $rate_3=($record_3_r/$sum)*100;
        $rr3=number_format((float)$rate_3, 2, '.', '');


        $img = imagecreatetruecolor(800, 800);

        // Assign some
        $black = imagecolorallocate($img, 0, 0, 0);
        $white = imagecolorallocate($img, 255, 255, 255);
        $red = imagecolorallocate($img, 255, 153, 153);

        imagefill($img, 0, 0, $white);

        imagefilledrectangle($img, 10, 110, round($rr1*5), 160, $red);
        imagefilledrectangle($img, 10, 180, round($rr2*5), 230, $red);
        imagefilledrectangle($img, 10, 250, round($rr3*5), 300, $red);

        imagestring($img, 100, 10, 120, "  Hong Gill-dong : ".$rr1, $black);
        imagestring($img, 100, 10, 190, "  Seng Chun-hyang: ".$rr2, $black);
        imagestring($img, 100, 10, 260, "  Lee Mong-ryong : ".$rr3, $black);


        // Define output header
        header('Content-Type: image/png');

        // Output the png image
        imagepng($img);


    }
}
?>