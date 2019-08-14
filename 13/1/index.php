<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>读取文件</title>
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
    <td width="250" height="25" align="right" valign="middle" scope="col">readfile()函数读取文件</td>
    <td height="25" align="center" valign="middle" scope="col">
	<?php readfile('tm.txt'); ?>	</td>
  </tr>
  <tr>
    <td height="25" align="right" valign="middle">file()函数读取文件</td>
    <td height="25" align="center" valign="middle">
	<?php
		$f_arr = file('tm.txt');
		foreach($f_arr as $cont){
			echo $cont."<br>";
		}
	?></td>
  </tr>
  <tr>
  	<td width="250" height="25" align="right" valign="middle" scope="col">file_get_contents()函数读取文件</td>
	<td height="25" align="center" valign="middle" scope="col">
	<?php
		$f_chr = file_get_contents('tm.txt');
		echo $f_chr;
	?></td>
  </tr>
</table>
</body>
</html>
