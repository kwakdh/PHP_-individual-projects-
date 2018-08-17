<?php
//-------------------- 문제 1 소스코드 ------------------------------
$num1_1 = $_POST['num1_1'];
$num1_2 = $_POST['num1_2'];


//입력 값이 1일경우
if ($num1_1 == 1) {
    for ($j = ord('a'); $j <= ord('z'); $j++) {
        for ($i = 1; $i <= $num1_2; $i++) {
            echo chr($j);
        }
        echo "<br>";
    }
}
//입력 값이 2일경우
if ($num1_1 == 2) {
    for ($j = ord('A'); $j <= ord('Z'); $j++) {
        for ($i = 1; $i <= $num1_2; $i++) {
            echo chr($j);
        }
        echo "<br>";
    }
}

//-------------------- 문제 2 소스코드 ------------------------------


$num2_1 = $_POST['num2_1'];
$num2_2 = $_POST['num2_2'];

$text_a = "a";
$text_A = "A";

if ($num2_1 == "1") {
    for ($i = 1; $i <= $num2_2 + 1; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo $text_a;
            $text_a = ++$text_a;
        }
        $text_a = "a";
        echo "<br>";
    }
}

if ($num2_1 == "2") {
    for ($i = 1; $i <= $num2_2 + 1; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo $text_A;
            $text_A = ++$text_A;
        }
        $text_A = "A";
        echo "<br>";
    }
}

//-------------------- 문제 3 소스코드 ------------------------------


$num3_1 = $_POST['num3_1'];
$num3_2 = $_POST['num3_2'];


if ($num3_1 == "1") {

    for ($i = 1; $i <= $num3_2; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp";
        }
        for ($k = ($num3_2 - $i); $k >= 0; $k--) {
            echo $text_a;
            $text_a = ++$text_a;
        }
        $text_a = "a";
        echo "<br>";
    }
}
if ($num3_1 == "2") {

    for ($i = 1; $i <= $num3_2; $i++) {
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp";
        }
        for ($k = ($num3_2 - $i); $k >= 0; $k--) {
            echo $text_A;
            $text_A = ++$text_A;
        }
        $text_A = "A";
        echo "<br>";
    }
}


//-------------------- 문제 4 소스코드 ------------------------------

$num4_1 = $_POST['num4_1'];
$num4_2 = $_POST['num4_2'];

if ($num4_1 == "1") {

    if ($num4_2 % 2 == 0) {
        $num4_2++;
    }

    for ($i = 1; $i <= $num4_2 / 2; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $text_a;
            $text_a = ++$text_a;
        }
        $text_a = "a";
        echo "<br>";
    }
    for ($i = 1; $i <= $num4_2 / 2 + 1; $i++) {
        for ($j = 1; $j <= $num4_2 / 2 + 2 - $i; $j++) {
            echo $text_a;
            $text_a = ++$text_a;
        }
        $text_a = "a";
        echo "<br>";
    }
}

if ($num4_1 == "2") {

    if ($num4_2 % 2 == 0) {
        $num4_2++;
    }

    for ($i = 1; $i <= $num4_2 / 2; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $text_A;
            $text_A = ++$text_A;
        }
        $text_A = "A";
        echo "<br>";
    }
    for ($i = 1; $i <= $num4_2 / 2 + 1; $i++) {
        for ($j = 1; $j <= $num4_2 / 2 + 2 - $i; $j++) {
            echo $text_A;
            $text_A = ++$text_A;
        }
        $text_A = "A";
        echo "<br>";
    }
}


//-------------------- 문제 5 소스코드 ------------------------------

$num5_1 = $_POST['num5_1'];

if ($num5_1 == "1") {

    //윗 부분
    for ($i = 97;$i <= 122; $i++) {
        //윗부분 왼쪽 삼각형
        for ($j = 97; $j <= $i; $j++) {
            echo chr($j);
        }
        //윗부분 가운데 삼각형
        for ($j = $i + 1; $j <= 122; $j++) {
            echo "&nbsp&nbsp";
        }
        //윗부분 오른쪽 삼각형
        for ($k = $i; $k >= 97; $k--) {
            echo chr($k);
        }
        echo "<br>";
    }
    //밑 부분
    for ($i = 121; $i >= 97; $i--) {
        // 밑부분 왼쪽 삼각형
        for ($j = 97; $j <= $i; $j++) {
            echo chr($j);
        }
        //밑부분 가운데 삼각형
        for ($j = $i + 1; $j <= 122; $j++) {
            echo "&nbsp&nbsp";
        }
        //밑부분 오른쪽 삼각형형
       for ($k = $i; $k >= 97; $k--) {
            echo chr($k);
        }
        echo "<br>";
    }

}
if ($num5_1 == "2") {

    for ($i = 97; $i <= 122; $i++) {
        for ($j = 97; $j <= $i; $j++) {
            echo chr($j);
        }
        for ($j = $i + 1; $j <= 122; $j++) {
            echo "&nbsp&nbsp";
        }
        for ($k = $i; $k >= 97; $k--) {
            echo chr($k);
        }
        echo "<br>";
    }
    for ($i = 121; $i >=97; $i--) {
        for ($j = 97; $j <= $i; $j++) {
            echo chr($j);
        }
        for ($j = $i + 1; $j <= 122; $j++) {
            echo "&nbsp&nbsp";
        }
        for ($k = $i; $k >= 97; $k--) {
            echo chr($k);
        }
        echo "<br>";
    }

}


//-------------------- 문제 6 소스코드 ------------------------------

$num6_1 = $_POST['num6_1'];

if ($num6_1 == "1") {
    //윗 부분
    for ($i = 97; $i <= 122; $i++) {
        //윗 부분 왼쪽 삼각형 중에......
        for ($j = 97; $j <= $i; $j++) {
            //중간의 한줄 출력하기
            if ($i == 122) {
                echo chr($j);
            } else {
                // a출력과 j=i일때 출력
                if (($j == 97) || ($j == $i)) {
                    echo chr($j);
                } else {
                    //나머지 공백 처리
                    echo "&nbsp";
                }
            }
        }
        for ($j = $i + 1; $j <= 122; $j++) {
            echo "&nbsp&nbsp";
        }
        for ($k = $i; $k >= 97; $k--) {
            if ($i == 122) {
                echo chr($k);
            } else {
                if (($k == 97) || ($k == $i)) {
                    echo chr($k);
                } else {
                    echo "&nbsp";
                }
            }
        }
        echo "<br>";
    }
    //밑 부분
    for ($i = 121; $i >= 97; $i--) {
        for ($j = 97; $j <= $i; $j++) {
            if ($i == 122) {
                echo chr($j);
            } else {
                if (($j == 97) || ($j == $i)) {
                    echo chr($j);
                } else {
                    echo "&nbsp";
                }
            }
        }
        for ($j = $i + 1; $j <= 122; $j++) {
            echo "&nbsp&nbsp";
        }
        for ($k = $i; $k >= 97; $k--) {
            if ($i == 122) {
                echo chr($k);
            } else {
                if (($k == 97) || ($k == $i)) {
                    echo chr($k);
                } else {
                    echo "&nbsp";
                }
            }
        }
        echo "<br>";
    }

}
if ($num6_1 == "2") {

    for ($i = 65; $i <= 90; $i++) {
        for ($j = 65; $j <= $i; $j++) {
            if ($i == 90) {
                echo chr($j);
            } else {
                if (($j == 65) || ($j == $i)) {
                    echo chr($j);
                } else {
                    echo "&nbsp";
                }
            }
        }
        for ($j = $i + 1; $j <= 90; $j++) {
            echo "&nbsp&nbsp";
        }
        for ($k = $i; $k >= 65; $k--) {
            if ($i == 90) {
                echo chr($k);
            } else {
                if (($k == 65) || ($k == $i)) {
                    echo chr($k);
                } else {
                    echo "&nbsp";
                }
            }
        }
        echo "<br>";
    }
    for ($i = 89; $i >= 65; $i--) {
        for ($j = 65; $j <= $i; $j++) {
            if ($i == 90) {
                echo chr($j);
            } else {
                if (($j == 65) || ($j == $i)) {
                    echo chr($j);
                } else {
                    echo "&nbsp";
                }
            }
        }
        for ($j = $i + 1; $j <= 90; $j++) {
            echo "&nbsp&nbsp";
        }
        for ($k = $i; $k >= 65; $k--) {
            if ($i == 90) {
                echo chr($k);
            } else {
                if (($k == 65) || ($k == $i)) {
                    echo chr($k);
                } else {
                    echo "&nbsp";
                }
            }
        }
        echo "<br>";
    }
}




?>


<html>
<head>

<body>
<p>카운트 다운 : </p>
<div id="block" class="bomb" >
    <span id="timer"></span>
</div>

<script>
    var count = 10;
    var counter = setInterval(timer, 1000);

    function timer() {
        count--;
        if (count == 0) {
            clearInterval(counter);

            document.getElementById("block").className = "bomb";
            document.getElementById("timer").innerHTML = "";
            history.back();
            return;
        }
        document.getElementById("timer").innerHTML = count;

    }
</script>
</body>
</html>
