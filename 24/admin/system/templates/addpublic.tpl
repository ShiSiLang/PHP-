<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/public.js"></script>
<title>{$title}</title>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="addpub" name="addpub" method="post" action="#">
  <tr>
    <td colspan="2" height="25" align="center" valign="middle" class="first">添加公告</td>  
  </tr>
  <tr>
    <td width="30%" height="25" align="right" valign="middle" class="left">公告标题：</td>
    <td align="left" valign="top" class="right" ><input id="title" name="title" type="text" class="langtxt" style="text-indent:5px;"/></td>
  </tr>
  <tr>
    <td width="30%" height="25" align="right" valign="middle" class="left">公告内容：</td>
    <td align="left" valign="top" class="right">&nbsp;<textarea id="content" name="content" class="areatxt" cols="35" rows="10"></textarea></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="add" name="add" type="button" class="btn" value="添加公告" onclick="return chkaddpub(addpub);"/></td>
  </tr>
</form>
</table>

</body>
</html>
