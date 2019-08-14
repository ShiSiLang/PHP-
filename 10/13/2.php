<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>测试2</title>
</head>

<body>
<table width="742" height="55" border="3" cellpadding="5" cellspacing="4">
  <tr>
    <td width="716"><?php 
$date=time();
$str=gmmktime(0,0,0,8,5,2016);
$str2=$str-$date;
echo ceil($str2/86400);
?></td>
  </tr>
</table>
</body>
</html>
