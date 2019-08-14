<?php
$im = imagecreate(200,60);                      //创建一个画布
$white = imagecolorallocate($im, 225,66,159);     //设置背景色为灰色
imagegif($im);                               //进行显示
?>
