<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>文件指针</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
$filename = "07.txt";
$total = filesize($filename);
if(is_file($filename)){
	echo "文件总的字节数：".$total."<br>";
	$fopen = fopen($filename,'rb');
	echo "初始化指针位置是：".ftell($fopen)."<br>";
	fseek($fopen,33);
	echo "ʹ使用fseek()函数指针后的指针位置是：".ftell($fopen)."<br>";
	echo "输出当前指针后面的内容是：".fgets($fopen)."<br>";
	if(feof($fopen))
		echo "当前指针指向文件末尾：".ftell($fopen)."<br>";
	rewind($fopen);
	echo "ʹ使用rewind()函数指针的位置是：".ftell($fopen)."<br>";
	echo "输出前33个字节的内容是：".fgets($fopen,33);
	fclose($fopen);
}else{
	echo "文件不存在";
}
?>
</body>
</html>