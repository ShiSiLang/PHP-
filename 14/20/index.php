<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>__call()</title>
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
class SportObject
{
	public function myDream(){
		echo '调用方法存在，直接执行此方法<p>';
	}
    public function __call($method, $parameter)
    {
		echo '如果方法不存在，则执行__call()方法<br>';
        echo '方法名为:'.$method.'<br>';
        echo '参数有:';
		var_dump($parameter);
    }
}
$MyLife = new SportObject();
$MyLife -> myDream();
$MyLife -> mDream('how','what','why');
?> 
</body>
</html>
