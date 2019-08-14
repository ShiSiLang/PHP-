<?php
header ( "Content-type: text/html; charset=UTF-8" ); 			//设置文件编码格式
srand((double)microtime()*1000000);								//生成随机数
$im=imagecreate(60,30);											//创建画布
$black=imagecolorallocate($im,0,0,0);							//定义背景
$white=imagecolorallocate($im,255,255,255);						//定义背景
$gray=imagecolorallocate($im,200,200,200);						//定义背景
imagefill($im,0,0,$gray);										//填充颜色
for($i=0;$i<4;$i++){					//定义4位随机数
 $str=mt_rand(3,20);						//定义随机字符所在位置的的Y坐标
 $size=mt_rand(5,8);					//定义随机字符的字体
 $authnum=substr($_GET['num'],$i,1);		//获取超级链接中传递的验证码
 imagestring($im,$size,(2+$i*15),$str,$authnum,imagecolorallocate($im,rand(0,130),rand(0,130),rand(0,130)));
} 							//水平输出字符串
for($i=0;$i<200;$i++){		//执行for循环，为验证码添加模糊背景
  $randcolor=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));	//创建背景
  imagesetpixel($im,rand()%70,rand()%30,$randcolor); 	//绘制单一元素
}
imagepng($im);				//生成png图像
imagedestroy($im);			//销毁图像
?>