<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>explode()函数</title>
</head>

<body>
<?php
$str="PHP编程词典@NET编程词典@ASP编程词典@JSP编程词典";				//定义字符串常量
$str_arr=explode("@",$str);											//进行分割
print_r($str_arr);													//输出分割后的结果
echo $str_arr[0];	                            // 输出第一个元素												
?>
</body>
</html>
