<?php session_start();  
if(!isset($_SESSION['temp'])){
	if(($fp=fopen("counter.txt","r"))==false){ 
		echo "文件不存在!";
	}else{ 
		$counter=fgets($fp,1024);
		fclose($fp);                   
		$counter++;                    
		$fp=fopen("counter.txt","w");   
		fputs($fp,$counter);         
		fclose($fp);    
	}                   				
 	$_SESSION['temp']=1; 	
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>文件统计页面访问量</title>
</head>
<body>
<img src="gd1.php" />
</BODY>
</HTML>