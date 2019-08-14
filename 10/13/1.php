<?php date_default_timezone_set("Etc/GMT-8"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>练习2</title>
</head>

<body>
<table width="742" height="55" border="3" cellpadding="5" cellspacing="4">
  <tr>
    <td width="716"><?php 
$dateY=date("Y");
$datem=date("m");
$dated=date("d");
$dates1=mktime(17,10,0,$datem,$dated,$dateY);
$dates2=time();
$dates3=$dates1-$dates2;
echo ceil($dates3/3600);
?></td>
  </tr>
</table>
</body>
</html>
