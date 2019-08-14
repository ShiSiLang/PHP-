<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>数据类型转换</title>
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
$num = '3.1415926r*r';							//声明一个字符串变量
echo '使用(integer)操作符转换变量$num类型：';
echo (integer)$num;								//使用integer转换类型
echo '<p>';
echo '输出变量$num的值：'.$num;					//输出原始变量$num
echo '<p>';
echo '使用settype函数转换变量$num类型';
echo settype($num,'integer');					//使用settype()函数转换类型
echo '<p>';
echo '输出变量$num的值：'.$num;					//输出原始变量$num
?>
</body>
</html>