<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>preg_replace()函数 </title>
</head>
<body>
<?php
	$string = '[b]粗体字[/b]';
	$b_rst = preg_replace('/\[b\](.*)\[\/b\]/i','<b>$1</b>',$string);
	echo $b_rst;
?>
</body>
</html>
