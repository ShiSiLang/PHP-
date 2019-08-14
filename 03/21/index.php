<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>逻辑运算符</title>
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
	$i = true;
	$j = true;
	$z = false;
	if($i or $j and $z)			//如果if表达式为真，返回true
		echo "true";
	else
		echo "false";
	echo "<br>";
	if($i || $j and $z)			//如果表达式为假，返回false
		echo "true";
	else
		echo "false";
?>
</div>
</body>
</html>
