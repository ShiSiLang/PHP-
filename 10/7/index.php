<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>多个国际化函数</title>
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
	setlocale(LC_ALL,"en_US");
	echo "美国格式：".strftime("Today is %A");
	echo "<p>";
	setlocale(LC_ALL,"chs");
	echo "中文简体格式：".strftime("今天是%A"); 
	echo "<p>";
	setlocale(LC_ALL,"cht");
	echo "<p>";
	echo "繁体中文格式：".strftime("今天是%A");
?>
</div>
</body>
</html>
