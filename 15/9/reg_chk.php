<?php
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$meth = $_POST['method'];
	$key = 'tomorrow';
	if($name != '' and $pwd != ''){
	  $conn = mysqli_connect("localhost","root","111") or die("数据库连接失败".mysql_error());
	  mysqli_select_db($conn,"db_database15") or die(" 该数据库不存在".mysql_error());
	  mysqli_query($conn,"set names gb2312");
	  if($meth == "crypt"){
	  	$pwd = crypt(trim($pwd),$key);
	  }else{
	  	$pwd = md5($pwd);
	  }
	  $sql = "insert into tb_user(user,password) values('".$name."','".$pwd."')";
	  $rst = mysqli_query($conn,$sql);
	  if($rst){
	  	echo "<script>alert('111');location='index.php';</script>";
	  }else{
		echo "<script>alert('222');history.go(-1);</script>";
	  }
	}
?>