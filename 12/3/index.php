<?php
session_start();
if(isset($_POST["Submit"]) && $_POST["Submit"]!=""){
$checks=$_POST["checks"];
if($checks==""){
echo "<script> alert('��֤�벻��Ϊ��');window.location.href='index.php';</script>";
}
if($checks==$_SESSION['check_checks']){
	echo "<script> alert('�û���¼�ɹ�!');window.location.href='index.php';</script>";
}else{
	echo "<script> alert('���������֤�벻��ȷ!');window.location.href='index.php';</script>";
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>随机验证码</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {font-weight: bold; font-size: 12px;}
-->
</style>
</head>
<body>
<form name="form" method="post" action="">
  <table width="1003" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="168" height="169" background="images/index_01.gif">&nbsp;</td>
      <td width="685" background="images/index_02.gif">&nbsp;</td>
      <td width="150" background="images/index_03.gif">&nbsp;</td>
    </tr>
    <tr>
      <td width="168" height="311" background="images/index_04.gif">&nbsp;</td>
      <td background="images/index_05.gif"><table width="675" height="169"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="43" align="center" valign="baseline">&nbsp;</td>
          <td align="center" valign="middle">&nbsp;</td>
          <td align="center" valign="baseline">&nbsp;</td>
        </tr>
        <tr>
          <td width="382" height="24" align="center" valign="baseline">&nbsp;</td>
          <td width="207" height="24" valign="middle"><span class="style2"></span><span class="STYLE1">
            <input  name="txt_user" id="txt_user" style="height:20px " size="10">
              </span></td>
          <td width="86" height="24" align="center" valign="baseline">&nbsp;</td>
        </tr>
        <tr>
          <td height="24" align="center" valign="baseline">&nbsp;</td>
          <td height="24" valign="middle"><span class="style2"></span><span class="STYLE1">
          <input  name="txt_pwd" type="password" id="txt_pwd" style="FONT-SIZE: 9pt; height:20px" size="10">
          </span></td>
          <td height="24" align="center" valign="baseline">&nbsp;</td>
        </tr>
        <tr>
          <td height="24" align="center" valign="baseline">&nbsp;</td>
          <td height="24" valign="middle"><span class="style2"></span><span class="STYLE1">
          <input name="checks" size="6" style="height:20px ">
          <img src="checks.php" width="70" height="18" border="0" align="bottom"></span>&nbsp;&nbsp;</td>
          <td height="24" align="center" valign="baseline">&nbsp;</td>
        </tr>
        <tr>
          <td height="40" align="center" valign="baseline">&nbsp;</td>
          <td align="center" valign="baseline">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="提交"></td>
          <td align="center" valign="baseline">&nbsp;</td>
        </tr>
      </table></td>
      <td background="images/index_06.gif">&nbsp;</td>
    </tr>
    <tr>
      <td height="100">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
