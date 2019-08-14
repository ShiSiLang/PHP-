<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>continue语句</title>
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
	$arr = array("A","B","C","D","E","F","G","H","I","J");//声明一个数组变量$arr
	for($i = 0; $i < 10; $i++){						//使用for循环
		echo "<br>";
		if($i % 2 == 0){							//如果为偶数，跳出本地循环
			continue;
		}
		for(;;){									//无限循环
			for($j = 0; $j < count($arr); $j++){	//再次使用for循环输出数组变量
				if($j == $i){						//如果当前输出的数组下标等于$i
					continue 3;						//跳出最外重循环
				}else{
					echo "\$arr[".$j."]=".$arr[$j]." ";	//输出表达式
				}
			}
		}
		echo "这句话永远不会输出。";
	}
?>
</body>
</html>
