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
<object name='��Ʒ'>
	<book>
		<computerbook>PHP�����ŵ���ͨ</computerbook>
	</book>
	<book>
		<computerbook name='PHP��Ŀ����ȫ��ʵ¼'/>
	</book>
</object>
XML;
$xml = simplexml_load_string($str);
echo $xml['name'].'<br>';
echo $xml->book[0]->computerbook.'<br>';
echo $xml->book[1]->computerbook['name'].'<br>';
?>