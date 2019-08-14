<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用异常模式——PDO：：ERRMODE_EXCEPTION捕获SQL中的错误</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>
<table id="__01" width="464" height="336" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="images/mysql_01.gif" width="464" height="139" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/mysql_02.gif" width="78" height="136" alt=""></td>
		<td width="312" height="136" valign="top"><table width="310" border="0" cellpadding="0" cellspacing="0">
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
	while($res=$result->fetch(PDO::FETCH_ASSOC)){		//while循环输出查询结果集，并且设置结果集的为关联索引
	?>	  
          <tr>
            <td height="22" align="center" valign="middle"><?php echo $res['id'];?></td>
            <td align="center" valign="middle"><?php echo $res['pdo_type'];?></td>
            <td align="center" valign="middle"><?php echo $res['database_name'];?></td>
            <td align="center" valign="middle"><?php echo $res['dates'];?></td>
            <td align="center" valign="middle"><a href="delete.php?conn_id=<?php echo $res['id'];?>">删除</a></td>
          </tr>
<?php 
	}
		  } catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
		  ?>
        </table></td>
		<td>
			<img src="images/mysql_04.jpg" width="74" height="136" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/mysql_05.gif" width="464" height="61" alt=""></td>
	</tr>
</table>
</body>
</html>
