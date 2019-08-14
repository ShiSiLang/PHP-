<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>mktime()函数</title>
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
<div align="center">
<?php
	echo "指定时间的时间戳：".mktime(12,23,56,12,10,2012)."<p>";//输出指定时间的时间戳
	echo "指定日期为：".date("Y-m-d",mktime(12,23,56,12,10,2012))."<p>";//使用date输出时间格式化后的日期
	echo "指定时间为：".date("H:i:s",mktime(12,23,56,12,10,2012));//使用date输出时间格式化后的日期
?>
</div>
</body>
</html>
