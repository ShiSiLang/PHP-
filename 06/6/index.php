<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注册</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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
<script src="js/check.js"></script>
<body>
<table width="765" height="229" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="229" colspan="2"><img src="images/bg_03.jpg" width="765" height="229" border="0" href="index.php" /></td>
  </tr>
  <tr>
    <td width="565" height="364" align="center" valign="top">	<form name="reg_check" method="post" action="index_ok.php" onSubmit="return chkreg(reg_check,'all')">
      <table width="550" height="270" border="0" align="center" cellpadding="0" cellspacing="0">
			
                <tr>
                  <td height="38" colspan="3" valign="bottom"><img src="images/bg_05.jpg" width="543" height="30" /></td>
                </tr>
                <tr>
                  <td width="110" height="30"><div align="right">用户名</div></td>
                  <td colspan="2" align="left">&nbsp;<input type="text" name="recuser" size="20"  onBlur="chkreg(reg_check,0)">
                    <font color="#FF0000">*</font>&nbsp;
                  <div id="check_recuser" style="color:#F1B000"></div></td>
                </tr>
				
                <tr>
                  <td height="30"><div align="right">详细联系地址</div></td>
                  <td height="30" colspan="2" align="left">&nbsp;<input type="text" name="address" size="50"  onBlur="chkreg(reg_check,1)">
                    <font color="#FF0000">*</font>&nbsp;
                  <div id="check_address" style="color:#F1B000"></div></td>
                </tr>
                <tr>
                  <td height="30"><div align="right">邮政编码</div></td>
                  <td height="30" colspan="2" align="left">&nbsp;<input type="text" name="postalcode" size="20"  onBlur="chkreg(reg_check,2)"><div id="check_postalcode" style="color:#F1B000"></div></td>
                </tr>
				<tr>
                  <td height="30"><div align="right">QQ号码</div></td>
                  <td height="30" colspan="2" align="left">&nbsp;<input type="text" name="qq" size="20"  onBlur="chkreg(reg_check,3)">
                    <font color="#FF0000">*</font>&nbsp;
                  <div id="check_qq" style="color:#F1B000"></div></td>
                </tr>
				<tr>
                  <td height="30"><div align="right">E-mail</div></td>
                  <td height="30" colspan="2" align="left">&nbsp;<input type="text" name="email" size="20" onBlur="chkreg(reg_check,4)">
                    <font color="#FF0000">*</font>&nbsp;<font color="#999999"></font>
                  <div id="check_email" style="color:#F1B000"></div></td>
                </tr>
                <tr>
                  <td height="30" align="right">固定电话</td>
                  <td height="30" colspan="2" align="left">&nbsp;<input type="text" name="gtel" size="20"  onBlur="chkreg(reg_check,6)">
                  <font color="#FF0000">*</font>&nbsp;<font color="#999999"><div id="check_gtel" style="color:#F1B000"></div></font></td>
          </tr>
		 
                <tr>
                  <td height="30"><div align="right">移动电话</div></td>
                  <td height="30" colspan="2" align="left">&nbsp;<input type="text" name="mtel" size="20"  onBlur="chkreg(reg_check,5)">
                    <font color="#FF0000">*</font>&nbsp;
                  <div id="check_mtel" style="color:#F1B000"></div></td>
                </tr>
                <tr>
                  <td height="30">&nbsp;</td>
                  <td width="100" height="30"><input type="image"  src="images/bg_09.jpg"></td>
                  <td width="340"><img src="images/bg_11.jpg" width="56" height="30" onClick="reg_check.reset()" style="cursor:hand"/></td>
                </tr>
        </table>
</form></td>
    <td width="200" height="364"><img src="images/bg_07.jpg" width="200" height="364" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/bg_08.jpg" width="765" height="101" /></td>
  </tr>
</table>

</body>
</html>
