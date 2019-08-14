<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>倒计时</title>
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
<?PHP 
     $time1 = strtotime(date( "Y-m-d H:i:s"));//当前的系统时间
     $time2 = strtotime("2019-10-1 00:00:00");//放假的时间
     $time3 = strtotime("2020-1-1");		  //2017年元旦
	$sub1 = ceil(($time2 - $time1) / 3600);	  
     $sub2 = ceil(($time3 - $time1) / 86400); 
	 echo "距离放假还有<font color=red> $sub1 </font>小时!!" ;  
	 echo "<p>";
	 echo "距离2020年元旦还有<font color=red>$sub2 </font>天!!";
?> 

</div>
</body>
</html>
