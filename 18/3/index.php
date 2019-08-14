<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 00px;
	margin-bottom: 0px;
}
.STYLE1 {
	font-size: 13px;
	font-weight: bold;
}
.STYLE2 {font-size: 12px}
-->
</style></head>

<body>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/bg_01.jpg" width="760" height="254" /></td>
  </tr>
  <tr>
    <td align="center"><table width="700" border="0">
      <tr>
        <td width="78" align="center"><span class="STYLE1">ID</span></td>
        <td width="262" align="center"><span class="STYLE1">图书名称</span></td>
        <td width="77" align="center"><span class="STYLE1">价格</span></td>
        <td width="176" align="center"><span class="STYLE1">出版日期</span></td>
        <td width="85" align="center"><span class="STYLE1">类 型</span></td>
      </tr>
	  <?php
	  include_once("conn/conn.php");
	  $result=mysqli_query($conn,"select * from tb_demo01");
		while($myrow=mysqli_fetch_array($result)){
	  ?>
      <tr>
        <td align="center"><span class="STYLE2"><?php echo $myrow[0]; ?></span></td>
        <td align="left"><span class="STYLE2"><?php echo $myrow[1]; ?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow[2]; ?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow['date']; ?></span></td>
        <td align="center"><span class="STYLE2"><?php echo $myrow['type']; ?></span></td>
      </tr>
	  <?php
	  }
	  ?>
    </table></td>
  </tr>
  <tr>
    <td><img src="images/bg_09.jpg" width="760" height="34" /></td>
  </tr>
</table>
</body>
</html>
