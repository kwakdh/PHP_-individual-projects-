<?php
$height= 400;
$width = 400;

$canvas4 = ImageCreateTrueColor($width,$height);

$pink = ImageColorAllocate($canvas4,255,192,203);

//draw on canvas
for($i=1;$i<=400;$i++){

    ImageLine($canvas4,$i,0,0,$i,$pink);

}

Header('content-type: image/png');
ImagePng($canvas4);

ImageDestory($canvas4);
?>