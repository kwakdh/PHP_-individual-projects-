<?php
// 캔버스 이미지 생성하기


$im = imageCreateTrueColor($width,$height);   //폭, 높이 ---> 픽셀 단위, 캔버스 아이디가 리턴됨(여기서는 아이디)
 $white = imageColorAllocate($im,255,255,255);
 $blue= imageColorAllocate($im,0,0,0);

 //draw on canvas
imageFill($im,0,0,$blue);
imageLine($im,0,0,$width,$height,$white);
imageString($im,4,50,150,'good',$white);

//output image
Header('content-type: image/png'); // 서버 -> 클라이언트
imagePng($im); // im이 캔버스인데 그것을 파일로 만드는 역할 ... ! 리스판스에 이미지파일이 전송된다.


//clean up
imageDestory($im);

?>