<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>杨辉三角形</title>
</head>
<body>
<?php
	$mixnum = 1;
	$maxnum = 10;
	$tmparr[][] = array();
	$tmparr[0][0] = 1;
	for($i = 1; $i < $maxnum; $i++){
		for($j = 0; $j <= $i; $j++){
			if($j == 0 or $j == $i){
				$tmparr[$i][$j] = 1;
			}else{
				$tmparr[$i][$j] = $tmparr[$i - 1][$j - 1] + $tmparr[$i - 1][$j];
			}
		}
	}	
	foreach($tmparr as $value){
		foreach($value as $vl)
			echo $vl.' ';
		echo '<p>';
	}
?>
</body>
</html>
