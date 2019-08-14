<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>strncmp()函数</title>
</head>

<body>
<?php
$str1="I like PHP !"; 			//定义字符串常量
$str2="i am fine !";			//定义字符串常量
echo strncmp($str1,$str2,2);  	//比较两个字符串
?>
</body>
</html>
