<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>number_format()函数</title>
</head>
<body>
<?php 
$number = 1868.96; 									//定义数字字符串常量
echo number_format($number);						//输出格式化后的数字字符串
echo "<br>";										//ִ执行换行
echo number_format($number, 2);						//输出格式化的数字字符串
echo "<br>";										//ִ执行换行
$number2 = 11886655.760055;							//定义数字字符串常量
echo number_format($number2, 2, '.', '.');			//输出格式化后的数字字符串
?>
</body>
</html>
