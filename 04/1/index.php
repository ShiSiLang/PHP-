<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>if语句</title>
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
	$num = rand();				//生成一个随机数
	if ($num % 2 == 0){			//判断变量$num是否为偶数
		echo "\$num = $num";	//如果为偶数，输出表达式和说明文字
		echo "<br>$num 是偶数";
	}
?>
</div>
</body>
</html>
