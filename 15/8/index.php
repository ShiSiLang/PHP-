<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>mhash</title>
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
	$filename = '08.txt';
	$str = file_get_contents($filename);
	$hash = 2;
	$password = '111';
	$salt = '1234';
	$key = mhash_keygen_s2k(1,$password,$salt,10);
	$str_mhash = bin2hex(mhash($hash,$str,$key));
	echo "文件08.txt的校验码是:".$str_mhash;
?>  
</body>
</html>
