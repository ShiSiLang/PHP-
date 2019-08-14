<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>preg_match()和preg_match_all()</title>
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
	$str = 'This is an example!';
	$preg = '/\b\w{2}\b/';
	$num1 = preg_match($preg,$str,$str1);
	echo $num1.'<br>';
	var_dump($str1);
	$num2 = preg_match_all($preg,$str,$str2);
	echo '<br>'.$num2.'<br>';
	var_dump($str2);
?>
</body>
</html>
