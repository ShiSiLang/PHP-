<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>substr()函数</title>
</head>

<body>
<?php
$text="祝福全国程序开发人员在编程之路上一帆风顺二龙飞腾三阳开泰四季平安五福临门六六大顺七星高照八方来财";
if(strlen($text)>30){
	echo substr($text,0,30)."...";
}
else{
	echo $text;
}
?>
</body>
</html>
