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
		<td class="one">修改</td>
	</tr>
<?php 
	try {
		$pdo=new PDO($dsn,$user,$pwd);
		$sql="select * from tb_pdo";
		$result=$pdo->query($sql);
		foreach($result as $value){
?>
	<tr>
		<td class="one"><?php echo $value[0];?></td>
		<td class="one"><?php echo $value[1];?></td>
		<td class="one"><?php echo $value[2];?></td>
		<td class="one"><?php echo $value[3];?></td>
		<td class="one"><a href="index.php?id=<?php echo $value[0];?>">修改</a></td>
	</tr>
<form action=''method="post">
<?php 
		}
		if(isset($_GET['id'])){
			$sql1="select * from tb_pdo where id='$_GET[id]'";
			$resul=$pdo->query($sql1);
				foreach ($resul as $value){
					
				
?>
	<tr>
			<td class="one"><input readonly type='text' name='id' value='<?php echo $value['id'];?>'></td>
			<td class="one"><input type='text' name='user' value='<?php echo $value[1];?>'></td>
			<td class="one"><input type='password' name='pwd' value='<?php echo $value[2];?>'></td>
			<td class="one"><input type='text' name='date' value='<?php echo $value[3];?>'></td>
			<td class="one"><input class="two" type='submit' name='sub1' value='确定'></td>
	</tr>
	
<?php 
			}
		}
?>
	</form>
<?php 
		if(isset($_POST['sub1']) && $_POST['sub1']=="确定"){
			$sql2="update tb_pdo set username='$_POST[user]',userpwd='$_POST[pwd]',date='$_POST[date]' where id='$_POST[id]'";
			$resu=$pdo->exec($sql2);
			if($resu==1){
				echo "<script>alert('更新数据成功');window.location.href='index.php'</script>";
			}	
		}	
	} catch (Exception $e) {
		echo "ERROR!!!".$e->getMessage()."<br>";
	}
?>
</table>





