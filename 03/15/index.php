<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>局部变量和全局变量</title>
</head>
<body>
<?php
$hr = "黄蓉";				//声明全局变量$hr
function lxt(){
	$gj = "郭靖";				//声明局部变量$gj
	echo $gj."<br>";			//输出局部变量的值
    global $hr;				//利用关键字global在函数体内使用全局变量
    echo $hr."<br>";			//输出全局变量
}    
lxt();
?>
</body>
</html>
