<?php
$canvas9 = imagecreatefromjpeg("zico.jpg");

$width = 300;
$height = 300;

//이미지 필터링 적용
//imagefilter($canvas9,IMG_FILTER_GRAYSCALE);
imagefilter($canvas9,IMG_FILTER_BRIGHTNESS,90);

header('Content-Type: image/jpeg');
imagejpeg($canvas9);

imagedestroy($canvas9);





?>