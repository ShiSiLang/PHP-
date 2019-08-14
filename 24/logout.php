<?php
	session_start();
	header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
	session_destroy();
	echo '<script>alert(\'用户已安全退出!\');location=(\'index.php\');</script>';
?>