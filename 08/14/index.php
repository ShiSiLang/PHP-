<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>PHP与Web的综合应用</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 5px;
}
-->
</style></head>
<body>
<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
  <table width="405" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
    <tr bgcolor="#FFCC33">
      <td width="103" height="25" align="right">姓名</td>
      <td height="25" align="left"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">性别</td>
      <td height="25" align="left"><input name="sex" type="radio" value="男" checked>
        男
        <input type="radio" name="sex" value="女">
        女</td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td width="103" height="25" align="right">密码</td>
      <td width="289" height="25" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">学历</td>
      <td height="25" align="left"><select name="select">
          <option value="本科">本科</option>
          <option value="专科">专科</option>
        </select></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">爱好</td>
      <td height="25" align="left"><input name="fond[]" type="checkbox" id="fond[]" value="篮球">
        篮球
        <input name="fond[]" type="checkbox" id="fond[]" value="足球">
        足球
        <input name="fond[]" type="checkbox" id="fond[]" value="吃饭">
        吃饭
        <input name="fond[]" type="checkbox" id="fond[]" value="其他">
        其他</td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">=个人写真 </td>
      <td height="25" align="left"><input name="photo" type="file" size="20" maxlength="1000" id="photo"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">个人简历</td>
      <td height="25" align="left"><textarea name="intro" cols="28" rows="4" id="intro"></textarea></td>
    </tr>
    <tr align="center" bgcolor="#FFCC33">
      <td height="25" colspan="2"><input type="submit" name="submit" value="提交">
        &nbsp;&nbsp;
        <input type="reset" name="submit2" value="重置"></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST['submit']) && $_POST['submit']!=""){
	echo "您的个人简历内容是：";
	echo " 姓名:".$_POST['user'];
	echo " 性别:".$_POST['sex'];
	echo " 密码:".$_POST['pwd'];
	echo " 学历:".$_POST['select'];
	echo " 爱好";
	for($i=0;$i<count($_POST['fond']);$i++)
		echo $_POST['fond'][$i]."&nbsp;&nbsp;";
	$path = './upfiles/'. $_FILES['photo']['name'];
	move_uploaded_file($_FILES['photo']['tmp_name'],$path);
	echo " 个人写真".$path;
	echo " 个人简介".$_POST['intro'];
}
?>
</body>
</html>
