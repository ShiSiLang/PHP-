<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>文本框</title>
</head>

<body>
<form name="form1" method="post" action="">
<table width="509" border="0">
  <tr>
    <td>用户名：</td>
    <td><input type="text" name="user" size="20" ></td>
    <td> 密&nbsp;&nbsp;码</td>
    <td><input name="pwd" type="password" id="pwd" size="20" ></td>
    <td><input name="submit" type="submit" id="submit" value="登录" /></td>
  </tr>
</table>


</form>
<?php
if(isset($_POST["submit"]) && $_POST["submit"]=="登录"){
	echo "您输入的用户名为：".$_POST['user']."&nbsp;&nbsp;密码为：".$_POST['pwd'];
}
?>
</body>
</html>
