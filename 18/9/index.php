<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>浏览数据</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<center>
 <table width="798" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td width="798"  height="108" background="images/banner.jpg">&nbsp;</td>
    </tr>
	<tr>
		<td>
		<table width="100%" height="38" border="0" cellpadding="0" cellspacing="0" background="images/link.jpg">
			<tr>
				<td width="193" align="center" valign="middle">
				<b><?php echo date("Y-m-d")." ";?></b></td>
				<td width="101" align="center" valign="middle"><a href="index.php">浏览数据</a></td>
				<td width="102" align="center" valign="middle"><a href="#">添加图书</a></td>
				<td width="101" align="center" valign="middle"><a href="#">简单查询</a></td>
				<td width="100" align="center" valign="middle"><a href="#">高级查询</a></td>
				<td width="101" align="center" valign="middle"><a href="#">分组统计</a></td>
				<td width="100" align="center" valign="middle"><a href="#">退出系统</a></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle">

<?php
include_once("conn/conn.php");
?>
<table width="90%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" width="5%" class="top">id</td>
    <td width="30%" class="top">书名</td>
    <td width="10%" class="top">价格</td>
    <td width="20%" class="top">出版时间</td>
    <td width="10%" class="top">类别</td>
	<td width="10%" class="top">操作</td>
  </tr>
<?php
	$sqlstr = "select * from tb_demo02 order by id";
	$result = mysqli_query($conn,$sqlstr);

	while ($rows = mysqli_fetch_row($result)){
		echo "<tr>";
		for($i = 0; $i < count($rows); $i++){
			echo "<td height='25' align='center' class='m_td'>".$rows[$i]."</td>";
		}
		echo "<td class='m_td'><a href=update.php?action=update&id=".$rows[0].">修改</a>/<a href='#'>删除</a></td>";
		echo "</tr>";
	}

?>
</table>
 </td>
    </tr>
</table>
 <table width="798" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="48" background="images/bottom.jpg">&nbsp;</td>
    </tr>
</table>
</center>
</body>
</html>
