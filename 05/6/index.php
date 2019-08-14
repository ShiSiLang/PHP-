<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>使用addcslashes()和stripcslashes()</title>
</head>
<body>
<?php
$a="编程词典网";         				   		//对指定范围内的字符进行转义
echo $a;										//输出指定的字符串
echo "<br>";							 		//ִ执行换行
$b=addcslashes($a,"编程词典网");			    //输出指定的字符串
echo $b;										//输出转义后的字符串
echo "<br>";							 		//ִ执行换行
$c=stripcslashes($b);        		   			//对转义的字符进行还原
echo $c;									    //输出还原后的转义字符串
?>
</body>
</html>
