<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>date()函数</title>
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
<div align="center">
<?php
	echo "输出单个变量".date("Y")."-".date("m")."-".date("d");	//输出单个字符
	echo "<p>";
	echo "输出组合变量".date("Y-m-d");						//输出组合参数
	echo "<p>";
	echo "输出更为详细的日期及时间".date("Y-m-d H:i:s");	//输出详细的日期和时间参数
	echo "<p>";
	echo "还可以更详细吗";
	echo date("l Y-m-d H:i:s T");							//除了时间，再输出星期及所在地区
	echo "<p>";
	echo "输出转义字符";
	echo date("\T\o\d\a\y \i\s \\t\h\\e jS \o\\f \y\\e\a\\r");//输出转义字符
?>
</div>
</body>
</html>
