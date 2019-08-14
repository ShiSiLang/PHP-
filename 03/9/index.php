<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>变量</title>
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
define ("MESSAGE","我是一名PHP程序员");
echo MESSAGE."<br>";					//输出常量MESSAGE
echo Message."<br>";					//输出"Message"，表示没有该常量
define ("COUNT","我想要怒放的生命",true);
echo COUNT."<br>";						//输出常量COUNT
echo Count."<br>";						//输出常量COUNT，因为设定大小写不敏感
$name = "count";
echo constant ($name)."<br>";    		//输出常量COUNT
echo (defined ("MESSAGE"))."<br>";     	//如果常量被定义，则返回true，使用echo输出显示1

?>
</body>
</html>
