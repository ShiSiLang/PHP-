<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>flock函数</title>
</head>
<body>
<?php
	$filename = '08.txt';		//声明要打开的文件名称
	$fd = fopen($filename,'w');	//以w形式打开文件
	flock($fd, LOCK_EX);		//锁定文件，独占共享
	fwrite($fd, "hightman1");	//向文件写入数据
	flock($fd, LOCK_UN);		//解除锁定
	fclose($fd);				//关闭文件指针
	readfile($filename);		//输出文件内容
?>
</body>
</html>
