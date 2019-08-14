<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>多文件上传</title>
<style type="text/css">
<!--
body {
	background-color: #F0F0F0;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {
	font-size: 13px;
	font-weight: bold;
}
.STYLE2 {font-size: 12px;
color: #FF0000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<table width="725" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><img src="images/02-03.jpg" width="765" height="230"></td>
  </tr>
  <tr>
    <td width="662" align="center" valign="top"><table width="578" border="0" cellspacing="0" cellpadding="0">
      
      <tr>
        <td height="20" colspan="2" align="center" bgcolor="#FFFFFF"><img src="images/02-03 (1).jpg" width="561" height="42"></td>
        </tr>
      <tr>
        <td height="20" colspan="2" align="center" bgcolor="#FFFFFF" class="STYLE1">内容1：</td>
        </tr>
      <form action="index_ok.php" method="post" enctype="multipart/form-data" name="form1">
        <tr>
          <td width="88" height="30" align="right" class="STYLE1">内容1：</td>
          <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
          </tr>
        <tr>
          <td height="30" align="right" class="STYLE1">内容2</td>
          <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
          </tr>
        <tr>
          <td height="30" align="right" class="STYLE1">内容3</td>
          <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
          </tr>
        <tr>
          <td height="30" align="right" class="STYLE1">内容4</td>
          <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
        </tr>
        <tr>
          <td height="30" align="right" class="STYLE1">内容5</td>
          <td><input name="picture[]" type="file" id="picture[]" size="30"></td>
          </tr>
        <tr>
          <td height="50">&nbsp;</td>
          <td><input type="image" name="imageField" src="images/02-03 (3).jpg"></td>
          </tr>
      </form>
    </table></td>
    <td width="99"><img src="images/02-03 (2).jpg" width="204" height="362"></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/02-03 (4).jpg" width="765" height="80"></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
