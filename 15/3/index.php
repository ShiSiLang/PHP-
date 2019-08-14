<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>登录</title>
</head>
<body>
<div align="center">
<script language="javascript">
function login(){
if(myform.name.value=="")
{alert("用户名不能为空");myform.name.focus();return false;}
if(myform.pwd.value=="")
{alert("密码不能为空");myform.pwd.focus();return false;}
}
</script>
<form  name="myform" method="post" action="index_ok.php">
  <table width="778" height="314" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="images/admin_login.gif"><table width="778" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="255" height="255">&nbsp;</td>
          <td width="66">&nbsp;</td>
          <td width="125">&nbsp;</td>
          <td width="332">&nbsp;</td>
        </tr>
        <tr>
          <td height="31">&nbsp;</td>
          <td align="center">用户名</td>
          <td><input name="name" type="text" id="name" size="16"></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="35">&nbsp;</td>
          <td align="center">密&nbsp;&nbsp;码</td>
          <td><input name="pwd" type="password" id="pwd" size="16"></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="34">&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">
            <input name="imageField" type="image" src="images/btn_dl.jpg" width="87" height="24" border="0" onClick="return login();">
          </a>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="87">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  </form>
 </div>
</body>
</html>
