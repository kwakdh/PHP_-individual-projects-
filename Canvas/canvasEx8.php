<?php
$width = 400;
$height = 400;

$canvas8 = ImageCreateTrueColor($width,$height);

$pink = ImageColorAllocate($canvas8,255,192,203);

imagepolygon($canvas8,array(250,0, 350,100 ,350,200 ,250,300 ,150,200 ,150,100 ,250,0),7,$pink);



Header('Content-type: image/png');
ImagePng($canvas8);

ImageDestory($canvas8);


?>