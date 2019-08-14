<?php
$arr = array ("ASP", "Java", "Java Web", "PHP", "VB");	//定义数组
$array = array_pop ($arr);								//获取数组中最后一个元素
echo "被弹出的单元是：$array <br />";					//输出最后一个元素值
print_r($arr);											//输出数组结构
?>
