<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>is_numeric()检测数据类型</title>
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
	$boo = "043112345678";							//声明一个全由数字组成的字符串变量
	if(is_numeric($boo))							//判断该变量是否由数字组成
		echo "Yes,the \$boo is a number：$boo!";	//如果是则输出该变量
	else
		echo "Sorry,This is an error!";				//否则输出错误语句

?>
</div>
</body>
</html>
