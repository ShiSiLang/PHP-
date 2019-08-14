<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fetchAll()方法获取结果集中的所有行</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (文件上传漏洞.psd) -->
<table id="__01" width="1004" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="5">
			<img src="images/index_01.jpg" width="1004" height="182" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/index_03.jpg" width="320" height="317" alt=""></td>
		<td colspan="3">
			<img src="images/index_04.jpg" width="535" height="55" alt=""></td>
		<td rowspan="3">
			<img src="images/index_05.jpg" width="149" height="317" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/index_06.jpg" width="47" height="262" alt=""></td>
		<td width="450" height="235" align="center" valign="top" background="images/index_07.jpg">
		<table width="400" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="center"><strong>ID</strong></td>
            <td align="center"><strong>PDO</strong></td>
            <td align="center"><strong>数据库</strong></td>
            <td align="center"><strong>时间</strong></td>
            <td align="center"><strong>操作</strong></td>
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
	$res=$result->fetchAll(PDO::FETCH_ASSOC);		//获取结果集中的所有数据
	for($i=0;$i<count($res);$i++){					//循环读取二维数组中的数据
	?>
	 	<tr>
            <td height="22" align="center" valign="middle"><?php echo $res[$i]['id'];?></td>
            <td align="center" valign="middle"><?php echo $res[$i]['pdo_type'];?></td>
            <td align="center" valign="middle"><?php echo $res[$i]['database_name'];?></td>
            <td align="center" valign="middle"><?php echo $res[$i]['dates'];?></td>
            <td align="center" valign="middle"><a href="#">删除</a></td>
        </tr>
<?php 
	}
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
		  ?>
        </table>
		</td>
		<td rowspan="2">
			<img src="images/index_08.jpg" width="38" height="262" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/index_09.jpg" width="450" height="27" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/index_11.jpg" width="1004" height="85" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/index_12.jpg" width="1004" height="5" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
