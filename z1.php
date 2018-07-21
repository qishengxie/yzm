<?php
session_start();
$x=80;
$y=30;
$str="";

$image=imagecreate($x,$y);
imagecolorallocate($image,250,250,250);
$f1=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
$f2=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
$f3=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
$black=imagecolorallocate($image,0,0,0);
imagerectangle($image,0,0,$x-1,$y-1,$black);

$arr=array();
for($i=0;$i<=9;$i++){
	$arr[]=$i;
}
for($i=65;$i<=65+25;$i++){
	$arr[]=chr($i);
}
for($i=97;$i<=97+25;$i++){
	$arr[]=chr($i);
}
shuffle($arr);
for($i=0;$i<4;$i++){
	$yzm[]=$arr[$i];
	$str.=$arr[$i];
}
$_SESSION["vcode"]=$str;
for($i=1;$i<200;$i++){
	$w=mt_rand(1,$x-9);
	$h=mt_rand(1,$y-9);
	$color=imagecolorallocate($image,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
	imagechar($image,1,$w,$h,"*",$color);
}
	
imagechar($image,6,10,10,$yzm[0],$f1);
imagechar($image,6,25,6,$yzm[1],$f2);
imagechar($image,6,40,10,$yzm[2],$f1);
imagechar($image,6,55,6,$yzm[3],$f3);

header("Content-type:image/gif");
imagegif($image);
imagedestroy($image);
?>