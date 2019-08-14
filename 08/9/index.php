<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>菜单列表框</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
}
-->
</style></head>
<body>
<form name="form1" method="post" action="index.php">
  <table width="423" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="231" height="30" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;请选择您喜欢的PHP类图书：</td>
      <td width="192" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"><select name="select[]" size="5" multiple>
          <option value="PHP数据库系统开完全手册">PHP数据库系统开完全手册</option>
          <option value="PHP编程宝典">PHP编程宝典</option>
          <option value="PHP程序开发范例宝典">PHP程序开发范例宝典</option>
          <option value="PHP5从入门到精通">PHP5从入门到精通</option>
          <option value="PHP函数参考大全">PHP函数参考大全</option>
        </select></td>
      <td align="left" valign="middle"><input type="submit" name="Submit" value="提交"></td>
    </tr>
    <tr>
      <td height="30" colspan="2" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<?php
if(isset($_POST['select']) && $_POST['select'] != ""){				
	echo "选择是:";
	for($i = 0; $i < count($_POST['select']); $i++)				
		echo $_POST['select'][$i]."&nbsp;&nbsp";
}
?></td>
    </tr>
  </table>
</form>
</body>
</html>
