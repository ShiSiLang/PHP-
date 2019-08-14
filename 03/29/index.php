<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>变量函数</title>
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
function come() {					//定义come函数
    echo "来了<p>";
}
function go($name = "jack") {		//定义go函数
    echo $name."走了<p>";
}
function back($string)				//定义back函数
{
    echo "又回来了 $string<p>";
}
$func = "come";						//声明一个变量，将变量赋值为come
$func(); 							//使用变量函数来调用函数come()
$func = "go";						//重新给变量赋值
$func("Tom"); 						//使用变量函数来调用函数go()
$func = "back";						//重新给变量赋值
$func("Lily");						//使用变量函数来调用函数back();
?>
</body>
</html>
