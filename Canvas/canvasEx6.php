<?php

$width = 400;
$height = 400;

$canvas6 = ImageCreateTrueColor($width,$height);

$pink = ImageColorAllocate($canvas6,255,192,203);

imagettftext($canvas6, 60, 50, 300, 100, $pink, 'wqy-microhei.ttc', 'ddddddd');

Header('Content-type: image/png');
ImagePng($canvas6);

ImageDestory($canvas6);

?>