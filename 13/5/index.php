<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>fwrite和file_put_contents</title>
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
	$filepath = "./05.txt";
	$str = "此情可待成追忆，只是当时已惘然<br>";
	echo "fwite函数写入文件";
	$fopen = fopen($filepath,'w') or die('文件不存在');
	fwrite($fopen,$str);
	fclose($fopen);
	readfile($filepath);
	echo "<p>file_put_contents函数写入文件";
	file_put_contents($filepath,$str);
	readfile($filepath);
?>
</body>
</html>
