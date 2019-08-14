<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>__set()和__get()</title>
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
	private $type = ' ';
	public function getType(){
		return $this -> type;
	}
    public function __get($name){
		if(isset($this ->$name)){
			echo '变量'.$name.'的值为:'.$this -> $name.'<br>';
		}
		else{
			echo '变量'.$name.'未定义，初始化为0<br>';
			$this -> $name = 0;
		}
    }
    public function __set($name, $value){
		if(isset($this -> $name)){
			$this -> $name = $value;	
			echo '变量'.$name.'的值为:'.$value.'<br>';
		}else{
			$this -> $name = $value;
			echo '变量'.$name.'被初始化为'.$value.'<br>';
		}
    }
}
$MyComputer = new SportObject();
$MyComputer -> type = 'DIY';
$MyComputer -> type;
$MyComputer -> name;
?> 
</body>
</html>