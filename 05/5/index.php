<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>使用addcslashes()和stripslashes()</title>
</head>

<body>
<?php
 $str = "select * from tb_book where bookname = 'PHP5从入门到精通'";
 echo $str."<br>";								//输出字符串
 $a = addslashes($str);							//对字符串中的特殊字符进行转义
 echo $a."<br>";								//输出转义后的字符
 $b = stripslashes($a);							//对转义后的字符进行还原
 echo $b."<br>";								//将字符原义输出
?>
</body>
</html>
