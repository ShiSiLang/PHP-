<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>strtotime函数</title>
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
	$time1 = date("Y-m-d H:i:s");
	$time2 = "2008-2-3 16:30:00";
	echo "变量\$time1的时间是：".$time1."<br>";
	echo "变量\$time2的时间是：".$time2."<p>";
	if(strtotime($time1) - strtotime($time2) < 0){
		echo "\$time1 早于 \$time2 ";
	}else{
		echo "\$time2 早于 $time1 ";
	}
?>
</div>
</body>
</html>
