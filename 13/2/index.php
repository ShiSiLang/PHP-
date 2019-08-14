<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>fgets和fgetss函数</title>
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
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" align="right" valign="middle" scope="col">fgets函数</td>
    <td height="30" align="center" valign="middle" scope="col">
<?php
	$fopen = fopen('fun.php','rb');
	while(!feof($fopen)){
		echo fgets($fopen);
	}
	fclose($fopen);
?>	</td>
  </tr>
  <tr>
    <td height="30" align="right" valign="middle">fgetss函数</td>
    <td height="30" align="center" valign="middle">
	<?php
	$fopen = fopen('fun.php','rb');
	while(!feof($fopen)){
		echo fgetss($fopen);
	}
	fclose($fopen);
?>	</td>
  </tr>
</table>
</body>
</html>
