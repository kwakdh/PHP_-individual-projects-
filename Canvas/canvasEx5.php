<?php

$width = 400;
$height = 400;

$canvas5 = ImageCreateTrueColor($width,$height);

$pink = ImageColorAllocate($canvas5,255,192,203);

ImageString($canvas5,20,150,200,"canvas~~~~Go!",$pink);

Header('Content-type: image/png');
ImagePng($canvas5);

ImageDestory($canvas5);

?>