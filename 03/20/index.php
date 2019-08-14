<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>位运算</title>
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
$m = 8 ;
$n = 12 ;
$mn = $m & $n ;             //与运算
echo $mn ." " ;
$mn = $m | $n ;              //或运算
echo $mn ." " ;
$mn = $m ^ $n ;             //异或运算
echo $mn ." " ;
$mn = ~$m ;                //取反操作
echo $mn ." " ;
?>
</div>
</body>
</html>
