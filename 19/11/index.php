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
	<form action="" method="post">
	<div>
	<span>PDO插入数据</span><br>
		用户名：<input class="one" type="text" name="text" ><br>
		密&nbsp;&nbsp;码：<input class="one"type="password" name="pwd"><br>
		<input class="two" type="submit" name="sub" value="确定">
		<input class="two" type="reset" name="res" value="重置">
<?php
	if(isset($_POST['sub'])){
		if($_POST['text']==""&&$_POST['pwd']==""){
			echo "文本框内容不能为空";
		}else{
			try {
				$pdo=new PDO($dsn,$user,$pwd);
				$sql="insert into tb_pdo values('','$_POST[text]','$_POST[pwd]',now())";
				$result=$pdo->exec($sql);
				echo "插入数据成功，影响条数为".$result;
			} catch (Exception $e) {
				echo "ERROR!!".$e->getMessage()."<br>";
			}		
		}
	}
?>
	</div>
	</form>	