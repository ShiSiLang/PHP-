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
    <td width="565" height="364" align="center" valign="top">
	<table width="88%"  border="0" cellspacing="-2" cellpadding="-2">
                        <tr>
                          <td height="38" colspan="2" align="center" valign="bottom"><img src="images/bg_05.jpg" width="543" height="30" /></td>
                        </tr>
                        <tr>
                            <td width="18%" height="22" align="right"><span class="style4">邮政编码</span></td>
                            <td width="82%" align="left" class="style4">&nbsp;<?php echo $_POST['recuser']; ?></td>
                        </tr>
                        <tr>
                            <td height="22" align="right"><span class="style4">E-mail：</span></td>
                            <td height="28" align="left" class="style4">&nbsp;<?php echo $_POST['address'];?></td>
                        </tr>
                        <tr>
                            <td height="22" align="right"><span class="style4">请务必填写您的邮箱：</span></td>
                            <td height="28" align="left" class="style4">&nbsp;<?php echo $_POST['postalcode'];?></td>
                        </tr>
                        <tr>
                            <td height="22" align="right"><span class="style4">QQ��</span></td>
                            <td align="left" class="style4">&nbsp;<?php echo $_POST['qq'];?></td>
                        </tr>
                        <tr>
                            <td height="22" align="right" style="padding-left:10px"><span class="style4">Email��</span></td>
                            <td align="left" class="style4">&nbsp;<?php echo $_POST['email'];?></td>
                        </tr>
                        <tr>
                          <td height="22" align="right" class="style4" style="padding-left:10px">�ֻ���</td>
                          <td align="left" class="style4">&nbsp;<?php echo $_POST['mtel'];?></td>
                        </tr>
                        <tr>
                          <td height="22" align="right" class="style4" style="padding-left:10px">�绰��</td>
                          <td align="left" class="style4">&nbsp;<?php echo $_POST['gtel'];?><strong></strong></td>
                        </tr>
            </table>
	</td>
    <td width="200" height="364"><img src="images/bg_07.jpg" width="200" height="364" /></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/bg_08.jpg" width="765" height="101" /></td>
  </tr>
</table>

</body>
</html>
