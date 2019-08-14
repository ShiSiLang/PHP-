<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>substr_replace()函数</title>
</head>

<body>
<?php
$str="用今日的辛勤工作,换明日的双倍回报";		//定义字符串常量
$replace="百倍";							//定义替换的字符串
echo substr_replace($str,$replace,26,4);   	//替换字符串
?>
</body>
</html>
