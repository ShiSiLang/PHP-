<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>while循环</title>
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
	$num = 1;
	$str = "10以内的偶数为：";
	while($num <= 10){
		if($num % 2 == 0){
			$str .= $num." ";
		}
		$num++;
	}
	echo $str;
?>
</div>
</body>
</html>
