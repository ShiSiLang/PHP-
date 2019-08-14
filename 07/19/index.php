<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>练习3</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><form name="form1" method="post" action="">
      <table width="400" border="1" cellpadding="0" cellspacing="1" bordercolor="#FF9900" bgcolor="#CCFF66">
        <tr align="center">
          <td height="36">多选</td>
          <td height="36" align="left"><p>              
            <input name="title" type="text" id="title" size="32">
              </p></td>
          <td height="36">&nbsp;</td>
        </tr>
        <tr align="center">
          <td width="98" height="120">选项</td>
          <td width="223" height="120"><p>
              <textarea name="content" cols="30" rows="5" id="content"></textarea>
              <br>
              <span class="style1">使用*进行分割</span></p></td>
          <td width="61" height="120"><input type="Submit" name="Submit" value="提交"></td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr>
    <td>
<?php
if(isset($_POST['Submit']) && $_POST['Submit']!=""){
?>
<table width="400" border="1" cellpadding="0" cellspacing="1" bordercolor="#FF9900" bgcolor="#CCFF66">
      <tr align="center">
        <td width="98" height="30"><?php echo $_POST['title'];?></td>
        <td width="223" height="30">
          <?php
			 $content=$_POST['content'];
			 $data=explode("*",$content);
		while(list($name,$value)=each($data)){
			 echo '<input type="checkbox" name="checkbox" value="checkbox">'; 
			 echo $value."\n";  
			} 
		?>
        </td>
        <td width="61" height="30">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
 }
?>
<p>&nbsp;</p>
</body>
</html>
