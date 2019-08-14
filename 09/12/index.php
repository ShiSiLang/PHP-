<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>验证JS元素是否为空</title>
</head>
<script language="javascript">
function mycheck(){					
	if(myform.user.value==""){
		alert("用户名不能为空");myform.user.focus();return false;
	}
	if(myform.pwd.value==""){
		alert("密码不能为空");myform.pwd.focus();return false;
	}
}
</script>
<body>
<form name="myform" method="post" action="">
  <table width="532" height="183" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCFF66" background="images/bg.jpg">
    <tr>
      <td height="71" colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="249" height="30" align="center">&nbsp;</td>
      <td width="281" align="left">
		用户名<input name="user" type="text" id="user" size="20"> <br><br>
		密&nbsp;&nbsp;码<input name="pwd" type="password" id="pwd" size="20">
	  </td>
    </tr>
    <tr>
      <td height="43" align="center">&nbsp;</td>
      <td height="43" align="center">
		<input type="submit" name="submit" onClick="return mycheck();" value="提交">&nbsp;
		<input type="reset" name="Submit2" value="重置">
	  </td>
    </tr>
  </table>
</form>
</body>
</html>
