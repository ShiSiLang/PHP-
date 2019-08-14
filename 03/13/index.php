<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>变量作用域</title>
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
$example="在***函数外";				//声明全局变量
function example(){
$example="***在函数内***";				//声明局部变量
echo "在函数内输出内容是：$example.<br>";	//输出局部变量
}
example();								//调用函数，输出变量值
echo "在函数外输出内容是：$example.<br>";	//输出全局变量
?>
</div>
</body>
</html>
