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
<object name='commodity'>
	<book type='computerbook'>
		<bookname name='PHP从入门到精通'/>
	</book>
	<book type='historybook'>
		<booknanme name='上下五千年'/>
	</book>
</object>
XML;
$xml = simplexml_load_string($str);
foreach($xml->children() as $layer_one){
	foreach($layer_one->attributes() as $name => $vl){
		echo $name.'::'.$vl;
	}
	echo '<br>';
	foreach($layer_one->children() as $layer_two){
		foreach($layer_two->attributes() as $nm => $vl){
			echo $nm."::".$vl;
		}
		echo '<br>';
	}
}
?>