<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>二维数组</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 12px;
	margin-top: 12px;
}
-->
</style></head>
<body>
<?php
	$arr = array('webname' => array('��̴ʵ�','���110'),'weburl' => array('www.mrbccd.com','www.bc110.com'));
	foreach($arr as $key => $value){
		echo $key.' => ';
		foreach($value as $vl)
			echo ' "'.$vl.'"';
		echo '<br>';
	}

?>
</body>
</html>
