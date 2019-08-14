<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Session实现聊天室换肤</title>
<style type="text/css">
<!--
.style6 {
	font-size: 24px;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>
<?php
	if(isset($_POST['select'])){
		$_SESSION['color1']=$_POST['select'];
	}
?>	
<body style="background-color:<?php if(isset($_SESSION['color1'])) echo $_SESSION['color1'];?>">
<table width="1024" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr align="center" valign="middle">
    <td height="80" colspan="2" class="style6">聊天室</td>
  </tr>
  <tr valign="middle">
    <td width="209" height="479" valign="top"><br>
        <span>&nbsp;&nbsp;时间:</span><br>
&nbsp;&nbsp;<?php echo date("y-m-d h:i:s");?>
</td>
    <td  valign="top"><br>
    &nbsp;&nbsp;&nbsp;&nbsp; </span></td>
  </tr>
  <tr valign="middle">
    <td height="50" colspan="2"><p><br>
      请更换你想要的颜色:</p>
      <form name="form1" method="post" action="">
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色</span>
        <select name="select" id="select">
          <option value="green">绿色</option>
          <option value="yellow">黄色</option>
          <option value="white">白色</option>
          <option value="red">红色</option>
          <option value="gray">灰色</option>
          <option value="lavender" selected>默认</option>
          </select>
      <input type="submit" name="Submit" value="选择">
    </form></td>
  </tr>
</table>
</body>
</html>
