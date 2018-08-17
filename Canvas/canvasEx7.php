<?php
$width = 400;
$height = 400;

$canvas7 = ImageCreateTrueColor($width,$height);

$pink = ImageColorAllocate($canvas7,255,192,203);

imagerectangle($canvas7,100,100,200,200,$pink);
//imagerectangle($canvas7,150,150,200,200,$pink);


Header('Content-type: image/png');
ImagePng($canvas7);

ImageDestory($canvas7);




?>