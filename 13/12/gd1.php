<?php 
if(($fp=fopen("counter.txt","r"))==false){
	echo "文件不存在!";
}else{
	$counter=fgets($fp,1024);
	fclose($fp);
	$im=imagecreate(240,24);
	$gray=imagecolorallocate($im,255,255,255);
	$color =imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
	$text=iconv("gb2312","utf-8","访问量是:"); 
	$font = "Fonts/FZHCJW.TTF";  
	imagettftext($im,14,0,20,18,$color,$font,$text);
	imagestring($im,5,160,5,$counter,$color);
	imagepng($im);
	imagedestroy($im);
}  	

?>