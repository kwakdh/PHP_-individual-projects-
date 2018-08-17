<?php
//set up canvas;
$height = 400;
$width = 400;

$canvas3 = ImageCreateTrueColor($width,$height);
$pink = ImageColorAllocate($canvas3,255,192,203);

//draw on canvas
ImageFill($canvas3,100,100,$pink);

//output Image
Header('Content-type: image/png');
ImagePng($canvas3);

//clean up
ImageDestory($canvas3);


?>