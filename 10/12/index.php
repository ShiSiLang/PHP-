<?php session_start();
date_default_timezone_set("Etc/GMT-8");						// ����ʱ�� ��ǰΪ����ʱ��
if(isset($_POST['Submit']) && $_POST['Submit']==true){
	$year=$_POST['year'];
	$month=$_POST['month'];
	$day=$_POST['day'];
	$dateH=date("H");
	$datei=date("i");
	$dates=date("s");
	$truedate=date("M-d-Y H:i:s", mktime ($dateH,$datei,$dates,$month,$day,$year));
}
?> 
<style type="text/css">
<!--
.STYLE1 {font-size: 13px;
         color: #0099CC;
}
.STYLE3 {
	font-size: 16px;
	font-weight: bold;
	color: #0099CC;
}
.STYLE5 {font-size: 16px; font-weight: bold; font-family: "���ķ���"; color: #0099CC; }
.STYLE7 {font-size: 13px}
-->
</style>
<title>练习1</title><form id="form1" name="form1" method="post" action="index.php">
<table width="446" border="5" cellpadding="5" cellspacing="5" bordercolor="#97C5F7">
  <tr>
    <td height="30" colspan="3" align="center"><span class="STYLE3">指定的日期</span></td>
  </tr>
  <tr>
    <td width="81" align="center"><span class="STYLE1">数据:</span></td>
    <td width="226" height="24"><span class="STYLE1">
      <input name="year" type="text" name="year" size="5" />
      年
      <input name="month" type="text" name="month" size="3" />
      月
      <input name="day" type="text" name="day" size="3" />
      日</span></td>
    <td width="73" align="center"><input name="Submit" type="submit" value="提交" /></td>
    </tr>
  <tr>
    <td height="26" colspan="3" align="center"><span class="STYLE5">测试:<?php if(isset($_POST['Submit'])) echo $truedate;?></span></td>
  </tr>
  <tr>
    <td height="73" colspan="3" align="center"><div align="left"><span class="STYLE7"></span></div></td>
  </tr>
</table>
</form>