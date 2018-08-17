<?php

$canvas2 = imagecreatefromjpeg("zico.jpg");

$width = 300;
$height = 300;

$pink = ImageColorAllocate($canvas2,255,204,255);
imagestring($canvas2, 20, 10, 10, "zico zico ni", $pink);

header('Content-Type: image/jpeg');
imagejpeg($canvas2);

imagedestroy($canvas2);





?>