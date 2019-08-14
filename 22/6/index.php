<?php
header('Content-Type:text/html;charset=utf-8');
?>
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
</style>
<?php
$str = <<<XML
<?xml version='1.0' encoding='gb2312'?>
<object>
	<book>
		<computerbook>PHP从入门到精通</computerbook>
	</book>
	<book>
		<computerbook>PHP项目开发全程实录</computerbook>
	</book>
</object>
XML;
$xml = simplexml_load_string($str);
foreach($xml->children() as $layer_one){
	print_r($layer_one);
	echo '<br>';
	foreach($layer_one->children() as $layer_two){
		print_r($layer_two);
		echo '<br>';
	}
}
?>
