<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ereg_replace_callback()函数</title>
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
function c_back($str){
	$str = "<font color=$str[1]>$str[2]</font>";
	return $str;
}
$string = '[color=blue]字体颜色[/color]';
echo preg_replace_callback('/\[color=(.*)\](.*)\[\/color\]/i',"c_back",$string);
?>
</body>
</html>