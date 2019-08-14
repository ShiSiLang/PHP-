<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用fetchColumn()方法读取数据库中的数据</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>
<table id="__01" width="891" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="4">
			<img src="images/fetch_01.jpg" width="890" height="86" alt=""></td>
		<td>
			<img src="images/分隔符.gif" width="1" height="86" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/fetch_02.jpg" width="236" height="288" alt=""></td>
		<td colspan="3">
			<img src="images/fetch_03.jpg" width="654" height="48" alt=""></td>
		<td>
			<img src="images/分隔符.gif" width="1" height="48" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3" width="11" background="images/fetch_04.jpg">
		</td>
		<td width="618" rowspan="3" valign="top">
		<table width="580" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="center"><strong>ID（第一列，数据ID值）</strong></td>
          </tr>
		  
	<?php
$dbms='mysql';     					//数据库类型 ,对于开发者来说，使用不同的数据库，只要改这个，不用记住那么多的函数
$host='localhost'; 					//数据库主机名
$dbName='db_database19';    		//使用的数据库
$user='root';      					//数据库连接用户名
$pass='111';          				//对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";
try {
    $pdo = new PDO($dsn, $user, $pass); 	//初始化一个PDO对象，就是创建了数据库连接对象$pdo
	$query="select * from tb_pdo_mysql";	//定义SQL语句
	$result=$pdo->prepare($query);			//准备查询语句
	$result->execute();						//执行查询语句，并返回结果集
	?>	  
          <tr>
            <td height="22" align="center" valign="middle"><?php echo $result->fetchColumn(0);?></td>
          </tr>
          <tr>
            <td height="22" align="center" valign="middle"><?php echo $result->fetchColumn(0);?></td>
          </tr>
          <tr>
            <td height="22" align="center" valign="middle"><?php echo $result->fetchColumn(0);?></td>
          </tr>
          <tr>
            <td height="22" align="center" valign="middle"><?php echo $result->fetchColumn(0);?></td>
          </tr>
<?php 
		  } catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
		  ?>
        </table>
		</td>
		<td rowspan="3" width="25" background="images/fetch_06.jpg">&nbsp;
	  </td>
		<td>
			<img src="images/分隔符.gif" width="1" height="240" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/fetch_08.jpg" width="236" height="22" alt=""></td>
		<td>
			<img src="images/分隔符.gif" width="1" height="22" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/fetch_09.jpg" width="890" height="90" alt=""></td>
		<td>
			<img src="images/分隔符.gif" width="1" height="90" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
