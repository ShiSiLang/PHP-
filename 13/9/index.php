<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>$_FIELS变量</title>
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
<table width="500" border="0" cellspacing="0" cellpadding="0">
<form action="" method="post" enctype="multipart/form-data">
  <tr>
    <td width="150" height="30" align="right" valign="middle">选择上传文件</td>
    <td width="250"><input type="file" name="upfile"/></td>
    <td width="100"><input type="submit" name="submit" value="上传" /></td>
  </tr>
</form>
</table>
<?php
	if(!empty($_FILES)){
		foreach($_FILES['upfile'] as $name => $value)
			echo $name.' = '.$value.'<br>';
	}
?>
</body>
</html>
