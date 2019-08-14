<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>输出语句</title>
</head>
<body>
<?php
	$boy = "spcn";
	$girl = 'qm';
	$arr = array($boy,$girl);
	echo $boy,' ',$girl,' ';
	echo '<br>';
	print($boy);
	echo '<br>';
	printf('%s',$girl);
	echo '<br>';
	print_r($arr);
?>
</body>
</html>
