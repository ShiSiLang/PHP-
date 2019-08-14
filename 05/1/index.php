<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>trim函数</title>
</head>

<body>
<?php
$str="\r\r(:@_@   创图书编撰伟业 展软件开发雄风   @_@:)      ";
echo trim($str);    // 去除字符串两边的风格
echo "<br>";        // 执行换行符
echo trim($str,"\r\r(: :)");    // 去除字符串左右的特殊字符
?>
</body>
</html>
