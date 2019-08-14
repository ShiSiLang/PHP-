<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
if($_GET['conn_id']!=""){
	$dbms='mysql';     					//数据库类型 ,对于开发者来说，使用不同的数据库，只要改这个，不用记住那么多的函数
	$host='localhost'; 					//数据库主机名
	$dbName='db_database19';    		//使用的数据库
	$user='root';      					//数据库连接用户名
	$pass='111';          				//对应的密码
	$dsn="$dbms:host=$host;dbname=$dbName";
	try {
    	$pdo = new PDO($dsn, $user, $pass); 	//初始化一个PDO对象，就是创建了数据库连接对象$pdo
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$query="delete from tb_pdo_mysqls where Id=:id";
		$result=$pdo->prepare($query);			//预准备语句
		$result->bindParam(':id',$_GET['conn_id']);		//绑定更新的数据
		$result->execute();
	} catch (PDOException $e) {
		echo 'PDO Exception Caught.';
		echo 'Error with the database:<br/>';
		echo  'SQL Query: '.$query;
		echo '<pre>';
    	echo "Error: " . $e->getMessage(). "<br/>";    	
		echo "Code: " . $e->getCode(). "<br/>";
		echo "File: " . $e->getFile(). "<br/>";
		echo "Line: " . $e->getLine(). "<br/>";
		echo "Trace: " . $e->getTraceAsString(). "<br/>";
		echo '</pre>';
	}
}
?>