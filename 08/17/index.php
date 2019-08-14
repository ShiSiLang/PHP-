<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>练习4：用户注册</title>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="606" border="2" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FFCC66">
    <tr align="center" bgcolor="#FFCC00">
      <td height="33" colspan="3"><span class="style1"></span></td>
    </tr>
    <tr>
      <td width="131" height="24" align="right" bgcolor="#FFFFCC">用户名</td>
      <td width="284" height="24" align="left" bgcolor="#FFFFFF"><input name="user" type="text" id="user" size="30"></td>
      <td width="165" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['user'];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">面膜</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="pwd" type="password" id="pwd" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['pwd'];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">性别</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="sex" type="radio" value="男" checked>
        男
        <input type="radio" name="sex" value="女">
      女</td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['sex'];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">学历</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><select name="select">
        <option value="本科">本科</option>
        <option value="专科" selected>专科</option>
      </select></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['select'];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">手机号</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="tel" type="text" id="tel" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['tel'];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">E-mail</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="email" type="text" id="email" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['email'];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">座机号码</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="homepage" type="text" id="homepage" size="30"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['homepage'];?></td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">爱好</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="like[]" type="checkbox" id="like[]" value="足球">
        足球
        <input name="like[]" type="checkbox" id="like[]" value="篮球">
        篮球
        <input name="like[]" type="checkbox" id="like[]" value="乒乓球">
        乒乓球
        <input name="like[]" type="checkbox" id="like[]" value="其他">
        其他</td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php
	if(isset($_POST['Submit']) && isset($_POST['like'])){
	  for($i=0;$i<count($_POST['like']);$i++){
		echo $_POST['like'][$i]."&nbsp;&nbsp;";
	  }
	}
	 ?>
	  </td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">个人写真</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><input name="photo" type="file" id="photo" size="25"></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php 
	if(isset($_POST['Submit'])){
		$path="./upfiles/".$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],$path);
		echo $path;
	}
	  ?>
      </td>
    </tr>
    <tr>
      <td height="24" align="right" bgcolor="#FFFFCC">个人简介</td>
      <td height="24" align="left" bgcolor="#FFFFFF"><textarea name="instr" cols="35" rows="5" id="instr"></textarea></td>
      <td height="24" align="left" bgcolor="#FFFFFF">&nbsp;<?php if(isset($_POST['Submit'])) echo $_POST['instr'];?></td>
    </tr>
    <tr align="center" bgcolor="#FFCC00">
      <td height="30" colspan="3"><input type="submit" name="Submit" value="提交">
      &nbsp;&nbsp;
      <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
</form>
</body>
</html>
