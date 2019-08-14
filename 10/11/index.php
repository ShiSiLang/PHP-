<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>页面脚本运行时间</title>
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
function run_time()
{
    list($msec, $sec) = explode(" ", microtime());
    return ((float)$msec + (float)$sec);
}
	 $start_time = run_time();
     $time1 = strtotime(date( "Y-m-d H:i:s"));		
     $time2 = strtotime("2019-10-1 00:00:00");		
     $time3 = strtotime("2020-1-1");				
	 $sub1 = ceil(($time2 - $time1) / 3600);		
     $sub2 = ceil(($time3 - $time1) / 86400);		
	 echo "距离放假还有<font color=red> $sub1 </font>天!!" ;  
	 echo "<p>";
	 echo "距离2017年元旦还有<font color=red>$sub2 </font>天!!"; 
	 $end_time = run_time();
?> 
<p>
该示例的运行时间为<font color=blue> <?php echo ($end_time - $start_time); ?> </font>秒
</div>
</body>
</html>
