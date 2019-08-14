<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>软硬回车</title>
</head>

<body>
<form name="form1" method="post" action="index.php">
    <textarea name="a" cols="20" rows="3" wrap="soft" id="a">我使用的是软回车，我输出之后不换行</textarea>
    <textarea name="b" cols="20" rows="3" wrap="hard" id="b">我使用的是硬回车，我输出之后自动换行</textarea>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
<input type="submit" name="Submit" value="提交">
</form>
<?php
if(isset($_POST['Submit']) && $_POST['Submit']!=""){
	echo nl2br($_POST['a'])."<br>";
	echo nl2br($_POST['b']);
}
?>

</body>
</html>
