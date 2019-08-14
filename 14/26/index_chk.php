<?php
	include_once "func.php";
	if($_POST['name'] != "tm"){
		$tm -> refurbish('');
	}else{
		$tm -> skipachange('','main.php');
	}
?>