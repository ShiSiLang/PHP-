<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>getdate()函数</title>
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
	$arr = getdate();//getdate()将当前信息保存
	echo $arr['year']."-".$arr['mon']."-".$arr['mday']." ";//返回当前的日期信息
	echo $arr['hours'].":".$arr['minutes'].":".$arr['seconds']." ".$arr['weekday'];//返回当前的时间信息
	echo "<p>";
	echo "Today is the $arr[yday]th of year";//输出今天是一年中的第几天
?>
</div>
</body>
</html>
