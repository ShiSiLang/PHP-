<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDO中进行事务的处理</title>
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
		<td width="312" height="136" valign="top">
	<form id="form1" name="form1" method="post" action="index.php">	
		<table width="310" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="right">类型：</td>
            <td align="left"><input name="pdo" type="text" id="pdo" size="20" /></td>
          </tr>
          <tr>
            <td height="25" align="right">数据库：</td>
            <td align="left"><input name="databases" type="text" id="databases" size="20" /></td>
          </tr>
          <tr>
            <td height="25" align="right">时间：</td>
            <td align="left"><input name="dates" type="text" id="dates" size="20" /></td>
          </tr>
          <tr>
            <td height="30" colspan="2" align="center"><input type="submit" name="Submit" value="提交" />&nbsp;&nbsp; &nbsp;&nbsp;<input type="reset" name="Submit2" value="重置" /></td>
          </tr>
		  
	<?php
if(isset($_POST['Submit']) && $_POST['Submit']=="提交" && $_POST['pdo']!=""){
	$dbms='mysql';     					//数据库类型 ,对于开发者来说，使用不同的数据库，只要改这个，不用记住那么多的函数
	$host='localhost'; 					//数据库主机名
	$dbName='db_database19';    		//使用的数据库
	$user='root';      					//数据库连接用户名
	$pass='111';          				//对应的密码
	$dsn="$dbms:host=$host;dbname=$dbName";
	try {
    	$pdo = new PDO($dsn, $user, $pass); 	//初始化一个PDO对象，就是创建了数据库连接对象$pdo
		$pdo->beginTransaction();				//开启事务
		$query="insert into tb_pdo_mysql(pdo_type,database_name,dates)values('".$_POST['pdo']."','".$_POST['databases']."','".$_POST['dates']."')";
		$result=$pdo->prepare($query);
		if($result->execute()){
			echo "数据添加成功！";
		}else{
			echo "数据添加失败！";
		}
		$pdo->commit();						//执行事务的提交操作
	} catch (PDOException $e) {
  		die ("Error!: " . $e->getMessage() . "<br/>");
    	$pdo->rollBack();					//执行事务的回滚
	}
}
		  ?>
        </table>
		</form>
		</td>
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
