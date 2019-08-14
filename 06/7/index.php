<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>UUB使用帮助</title>
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
</style>
</head>
<body>
<?php
$url = '[url=http://www.bccd.com/]链接[/url]';
	$color = '[color=red]字体颜色[/color]';
	$b = '[b]字体加粗[/b]';
	$pics = '/dx';
	$string = '�������ӣ�'.$url;
	$string .= '<br>������ɫ��'.$color;
	$string .= '<br>���壺'.$b;
	$string .= '<br>��ͼ: '.$pics;
	
	$rst = '�������ӣ�'.preg_replace('/\[url=(http:\/\/\w+(\.\w+)+\/.*)\](.*)\[\/url\]/is','<a href=\'$1\'>$3</a>',$url);
	$rst .= '<br>������ɫ��'.preg_replace('/\[color=(.*)\](.*)\[\/color\]/','<font color=\'$1\'>$2</font>',$color);
	$rst .= '<br>���壺'.preg_replace('/\[b\](.*)\[\/b\]/','<b>$1</b>',$b);
	$rst .= '<br>��ͼ��'.preg_replace('/\/(dx)/','<img src=\'images/$1.gif\'/>',$pics);
?>
<table border="1" cellpadding="0" cellspacing="0" bgcolor="f0f0f0">
<tr>
    	<td align="center"><h3>UBBʹ�ð���</h3></td>
    <td align="center"><h4>ʵ��Ч��</h4></td>
    </tr>
    <tr>
    	<td><?php echo $string; ?></td>
        <td><?php echo $rst; ?></td>
    </tr>
</table>
</body>
</html>