<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>mcrypt库常量</title>
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
	$str = "被加密的内容是:相见时难别亦难，东风无力百花残";
	$key = "key:111";
	$cipher = MCRYPT_DES;
	$modes = MCRYPT_MODE_ECB;
	$iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher,$modes),MCRYPT_RAND);
	echo "加密前:".$str."<p>";
	$str_encrypt = mcrypt_encrypt($cipher,$key,$str,$modes,$iv);
	echo "加密后:".$str_encrypt." <p>";
	$str_decrypt = mcrypt_decrypt($cipher,$key,$str_encrypt,$modes,$iv);
	echo "还原后:".$str_decrypt;
?>
</body>
</html>