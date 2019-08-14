<?php
session_start();
if(isset($_COOKIE['cookie1']) && $_COOKIE['cookie1']!=''){	  
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="refresh" content="10;url=study.php">
<title>COOKIE</title>
<style type="text/css">
<!--
.style1 {
	font-size: 25px;
	font-family: "�����п�";
}
-->
</style></head>

<body>
<table width="392" height="178" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
  <tr>
    <td height="176" align="center">&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="style1">
    <p></p></span>    <p> &nbsp;&nbsp;&nbsp;</p>      <p class="style1">&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
<?php
}else{ 
	echo "...";
	echo "<meta http-equiv=\"Refresh\" content=\"5;url=index.php\">";
}
?>