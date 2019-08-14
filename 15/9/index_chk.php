<?php
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$meth = $_POST['method'];
	$key = 'tomorrow';
	if($name != '' and $pwd != ''){
	  $conn = mysqli_connect("localhost","root","111") or die("数据库连接失败".mysql_error());
	  mysqli_select_db($conn,"db_database15") or die("该数据库不存在".mysql_error());
	  mysqli_query($conn,"set names gb2312");
	  if($meth == "crypt"){
	  	$pwd = crypt(trim($pwd),$key);
	  }else{
	  	$pwd = md5($pwd);
	  }
	  $sql = "select * from tb_user where user = '".$name."' and password = '".$pwd."'";
	  $rst = mysqli_query($conn,$sql);
	  if(mysqli_num_rows($rst) > 0){
		echo "<font color='red'>11</font>&nbsp;<a href=index.php>11</a>";
	  }else{
		echo "<script>alert('222');history.go(-1);</script>";
	  }
	}
?>