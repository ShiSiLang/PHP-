<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>首页</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
body{ font-size:12px;}
-->
</style>
</head>
<body>
<script language="javascript">
	function check(form){
		if(form.user.value==""){
			alert("用户名不能为空");form.user.focus();return false;		
		}
		if(form.pwd.value==""){
			alert("密码不能为空");form.pwd.focus();return false;
		}
		form.submit();
	}
</script>
<form name="form1" method="post" action="default.php">
  <table width="521" height="394" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="images/login.jpg"><table width="521" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="262" height="218">&nbsp;</td>
            <td width="259">&nbsp;</td>
          </tr>
          <tr>
            <td height="24" align="right">用户名</td>
            <td height="24" align="left"><input name="user" type="text" id="user" size="20"></td>
          </tr>
          <tr>
            <td height="24" align="right">密&nbsp;&nbsp;码</td>
            <td height="24" align="left"><input name="pwd" type="password" id="pwd" size="20"></td>
          </tr>
          <tr align="center">
            <td height="24" colspan="2"><input type="submit" name="Submit" value="提交" onClick="return check(form);">
            &nbsp;&nbsp;
            <input type="reset" name="Submit2" value="重置"></td>
          </tr>
          <tr>
            <td height="76" align="right"><span class="style1"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
            <td><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
