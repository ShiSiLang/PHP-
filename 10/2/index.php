<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>time()函数</title>
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
<div align="center">
<?php
$nextWeek = time() + (7 * 24 * 60 * 60);      // 7 days; 24 hours; 60 mins; 60secs
echo 'Now: '. date('Y-m-d') ."<p>";			  // 输出当前日期
echo 'Next Week: '. date('Y-m-d', $nextWeek); // 输出变量NextWeek日期
?>

</div>
</body>
</html>
