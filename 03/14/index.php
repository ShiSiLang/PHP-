<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>静态变量和普通变量的比较</title>
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
function zdy (){
   static $message = 0;
   $message+=1;
   echo $message." ";
}
function zdy1(){
   $message = 0;				
   $message += 1;	
   echo $message." ";
}
for($i=0;$i<10;$i++)
	zdy();
echo "<p>";
for($i=0;$i<10;$i++)
	zdy1();
echo "<br>";
?>
</div>
</body>
</html>
