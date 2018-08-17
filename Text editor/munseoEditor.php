<?php
if(isset($_POST['munseoEditor'])){
    $InText = $_POST['munseoEditor'];
}
if(isset($_POST['munseoEditor2'])){
    $input = $_POST['munseoEditor2'];
}
$changeText=null;

if(isset($_POST['munseoEditor3'])){
    $changeText = $_POST['munseoEditor3'];
}

//changeText변수에 값이 들어올 경우 실행되는 조건문 -----> 단어바꾸기
if($changeText!=null) {
    echo str_replace($input,$changeText,$InText);
    $changeText==null;
}

//소문자->대문자 변환
if($input=="1"){
    echo strtoupper($InText);
}
// 대문자->소문자 변환
if($input=="2"){
    echo strtolower($InText);
}

// 파일 저장
if($input=='3'){

    $Save = fopen("C:\AutoSet9\public_html\save.html","r");
    fputs($Save,$InText);  //문자열을 파일에 저장
    fclose($Save); //열었던 파일 종료
    echo $InText;

}





?>

