<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>明日购物商城</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/table.css" />
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/pub.css" />
<link rel="stylesheet" href="css/reg.css"/>
<link rel="stylesheet" href="css/search.css"  />
<link href="css/link.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/links.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<script language='javascript' src='js/queryform.js'></script>
<script language="javascript" src="js/shopcar.js"></script>
<script language="javascript" src="js/settle.js"></script>
<script language="javascript" src="js/search.js"></script>
<script language="javascript" src="js/info.js"></script>
<script language="javascript" src="js/login.js"></script>
<body>
<center>
<table width="850" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2">{include file='top.tpl'}</td>
  </tr>
  <tr>
    <td width="216" align="left" valign="top">
	{include file='login.tpl'}
	{include file='public.tpl'}
	{include file='links.tpl'}
    </td>
    <td width="634" height="700" align="center" valign="top">
{include file='search.tpl'}

<!--载入模板文件-->{include file=$admin_phtml}</td>
  </tr>
</table>
<table width="850" border="0" cellspacing="0" cellpadding="0">
	<tr>
    	<td>{include file='buttom.tpl'}</td>
    </tr>
</table>
</center>
</body>
</html>
