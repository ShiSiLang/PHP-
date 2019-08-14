<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>接口</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
	interface MPopedom{
		function popedom();
	}
	interface MPurview{
		function purview();
	}
	class Member implements MPurview{
		function purview(){
			echo '会员拥有的权限';
		}
	}
	class Manager implements MPurview,MPopedom{
		function purview(){
			echo '管理员拥有会员的全部权限';
		}
		function popedom(){
			echo '管理员还有会员没有的权限';
		}
	}
	$member = new Member();
	$manager = new Manager();
	$member -> purview();
	echo '<p>';
	$manager -> purview();
	$manager ->popedom();
?>
</body>
</html>
