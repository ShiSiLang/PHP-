<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>下拉列表框</title>
<style type="text/css">
<!--
.style2 {font-size: 13px}
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="280" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="80" height="25" align="center"><span class="style2">意见主题:</span></td>
      <td width="194">
		<select name="select" size="1">
			<option value="公司发展" selected>公司发展</option>
			<option value="管理制度">管理制度</option>
			<option value="后勤服务">后勤服务</option>
			<option value="员工薪资">员工薪资</option>
        </select>&nbsp;&nbsp;&nbsp;
      <input type="submit" name="submit" value="提交"></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST['submit']) && $_POST['submit']=="提交"){
   echo "您选择的意见主题是：".$_POST['select'];
}
?>
</body>
</html>
