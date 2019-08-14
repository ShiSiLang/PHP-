<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>字符串运算符</title>
</head>
<body>
<?php 
$n = "3.1415926r*r";		//声明一个字符串变量，以数字开头
$m = 1;						//声明一个整型变量
$nm = $n.$m;				//使用.运算符将两个变量连接
echo $nm."<br>";
$mn = $n + $m ;				//使用+运算符将两个变量连接
echo $mn . "<br>" ; 
?>
</body>
</html>
