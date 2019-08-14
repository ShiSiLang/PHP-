<?php
$xml = simplexml_load_file('10.xml');
$xml->book->computerbook['type'] = iconv('gb2312','utf-8','PHP程序员必备工具');
$xml->book->computerbook = iconv('gb2312','utf-8','PHP函数参考大全');
$modi = $xml->asXML();
file_put_contents('10.xml',$modi);
$str = file_get_contents('10.xml');
echo $str;
?>