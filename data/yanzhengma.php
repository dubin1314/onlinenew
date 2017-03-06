<?php
session_start();
header('Content-Type: image/png');
header('Cache-Control: no-cache');
header('Pragma: no-cache');

$w = 80;
$h = 34;
//在服务器端内存中创建一张图片
$img = imagecreatetruecolor($w, $h);
//为图片绘制背景颜色
$c = imagecolorallocate( $img,rand(150,256), rand(150,256), rand(150,256));
imagefilledrectangle($img, 0, 0, $w, $h, $c);

$captch_code="";
//在图片上绘制随机的文字
$src = 'ABCDEFGHJKLMNPQRSTUVWXY123456789';
for($i=0; $i<4; $i++){
	$fontcontent = $src[rand(0,strlen($src)-1)];
	$captch_code.=$fontcontent;
	$fontcolor = imagecolorallocate( $img,rand(50,200), rand(80,180), rand(80,180));
	imagestring($img,rand(20,30), $i*20+10, rand(0,$h-15),$fontcontent, $fontcolor);
}
$_SESSION['authcode']=$captch_code;
//为背景添加杂色
for($i=0;$i<100;$i++){
$color=imagecolorallocate($img,rand(50,220),rand(50,220),rand(50,220));
imagesetpixel($img,rand(0,70),rand(0,20),$color);
}
//为背景添加线条
for($i=0;$i<3;$i++){
$linecolor=imagecolorallocate($img,rand(80,220),rand(80,220),rand(80,220));
imageline($img,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linecolor);
}
//把图片输出给客户端
imagepng($img);
//从服务器内存中删除该图片
imagedestroy($img);