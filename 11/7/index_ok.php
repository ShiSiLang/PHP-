<?php 
    setcookie("cookie1",$_POST['user'],time()+30);
    
    if($_POST['user']!="" && $_POST['pass']!=""){
	header("location:study.php");
	}
?>