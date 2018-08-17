<?php

$garo = $_POST['garo'];
$sero = $_POST['sero'];

$bum1 = $_POST['bum1'];
$bum2 = $_POST['bum2'];
$garoIndex=0;
$garoTemp=0;

$cha=$bum2-$bum1+1;
$check = isset($_POST['check1'])?:false;
$randCount = 0;



if($garo*$sero>$bum2){

    echo "<script>alert('범위 잘못 입력했다.. 다시 입력 부탁드려요')</script>";

    //다시 html페이지로 되돌아가는 거  !!!!
    echo "<script>
           history.back();
           </script>";

}

if($bum1>$bum2){

    echo "<script>alert('최소범위가 너무큽니다 다시 입력 부탁드려요')</script>";

    //다시 html페이지로 되돌아가는 거  !!!!
    echo "<script>
           history.back();
           </script>";

}

echo "<table border='2'>";

$nan=array();

//난수 생성

for($i=0 ; $i<$garo * $sero; $i++) {

    $nan[$i] = rand($bum1, $bum2);

    //반복 제거
    for ($k = 0; $k < $i; $k++) {
        if ($nan[$i] == $nan[$k]) {
            $i--;
        }
    }
}


while($garoTemp < $garo){

    echo "<tr>";

    //세로 찍기 -----> 3의배수 클릭할 경우
    if(isset($_POST['check1'])){

        for($i=0 ; $i<$sero; $i++) {
            if ($nan[$randCount] % 3 == 0) {
                echo "<td style='background-color: darksalmon'>".$nan[$randCount++]."</td>";
            } else {
                echo "<td>".$nan[$randCount++]."</td>";
            }
        }
    }
    //3의 배수 아닌경우 출력
    else{
        for($i=0 ; $i<$sero; $i++) {
            echo "<td>".$nan[$randCount++]."</td>";
        }
    }

    echo "</tr>";
    $garoTemp+=1;
}
?>

<html>
<input type='button' value='돌아가기' onclick=history.back();>
<br/>
</html>