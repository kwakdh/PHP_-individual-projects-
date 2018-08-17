<?php


  //set up canvas
  $height = 200;
  $width = 200;

   $canvas1 = ImageCreateTrueColor($width,$height);
   $pink = ImageColorAllocate($canvas1,255,204,255);
   $red = ImageColorAllocate($canvas1,255,102,102);
   $white = imageColorAllocate($canvas1,255,255,255);

   //draw on canvas
   ImageFill($canvas1,0,0,$red);
   ImageLine($canvas1,0,0,$width,$height,$pink);
   ImageString($canvas1,4,50,150,'Start canvas ! ',$white);

   //output image
   Header('Content-type: image/png');
   ImagePng($canvas1);

   //clean up
   ImageDestory($canvas1);


?>