<?php
header("content-type:image/jpeg");       //定义输出为图像类型
$im=imagecreatefromjpeg("images/photo.jpg");//载入照片
$textcolor=imagecolorallocate($im,56,73,136);//设置字体颜色为蓝色，值为RGB颜色值
$fnt="c:/windows/fonts/simhei.ttf";      //定义字体
$motto=iconv("gb2312","utf-8","长白山天池");//定义输出字符串
imageTTFText($im,220,0,480,340,$textcolor,$fnt,$motto);//写TTF文字到图中
imagejpeg($im);       //建立JPEG图形
imagedestroy($im);    //结束图形，释放内存空间
?>
