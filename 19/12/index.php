<?php 
	header("Content-Type:text/html;charset=utf-8");
	$dbms='mysql';
	$dbName='db_database19';
	$user='root';
	$pwd='111';
	$host='localhost';
	$dsn="$dbms:host=$host;dbname=$dbName";
?>
<link type="text/css" rel="stylesheet" href="index.css">
<table>
<tr>
		<td class="one">ID</td>
		<td class="one">用户名称</td>
		<td class="one">用户密码</td>
		<td class="one">操作时间</td>
</tr>
<?php 
	try {
		$pdo=new PDO($dsn,$user,$pwd);
		$sql="select * from tb_pdo";
		$result=$pdo->query($sql);
		foreach($result as $key=>$value){
?>
	<tr>
		<td><?php echo $value[0];?></td>
		<td><?php echo $value[1];?></td>
		<td><?php echo $value[2];?></td>
		<td><?php echo $value[3];?></td>
	</tr>
<?php 
		}
	} catch (Exception $e) {
		echo "ERROR!!".$e->getMessage()."<br>";
	}
?>
</table>