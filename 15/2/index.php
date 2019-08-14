<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>crypt函数</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style>
</head>
<body>
<div align="center">
<?php
	$conn = mysqli_connect("localhost","root","123456") or die("数据库连接失败".mysql_error());
	mysqli_select_db($conn,"db_database15") or die("数据库访问错误".mysql_error());
	mysqli_query($conn,"set names gb2312");
?>
  <form id="form1" name="form1" method="post" action="">
    <table border="0" cellpadding="0" cellspacing="0">
      <tr>
		<td width="100" height="30" align="right" valign="middle" scope="col"></td>
        <td width="100" height="30" align="left" valign="middle" scope="col"><label for="textfield"></label>
        <input name="username" type="text" id="username" size="15" /></td>
        <td width="100" align="center" valign="middle" scope="col"><input type="submit" name="Submit" value="提交" id="Submit" /></td>
      </tr>
    </table>
  </form>
<?php
	if(isset($_POST['username']) && trim($_POST['username']) != ""){
		$usr = crypt(trim($_POST['username']),"tm");
		$sql = "select * from tb_user where user = '".$usr."'";
		$rst = mysqli_query($conn,$sql);
		if(mysqli_num_rows($rst) > 0){
			echo "<font color='red'>用户名已存在</font>";
		}else{
			echo "<font color='green'>恭喜您，用户名可以使用!</font>";
		}
	}
?>
</div>
</body>
</html>
