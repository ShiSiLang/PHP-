<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
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
class MsubStr{
	function csubstr($str, $start, $len) { 				
	$strlen = $start + $len; 							
	$tmpstr = "";										
	for($i = 0; $i < $strlen; $i ++) { 					
		if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) { 	
			$tmpstr .= substr ( $str, $i, 2 ); 			
			$i ++; 										
		} else { 										
			$tmpstr .= substr ( $str, $i, 1 );
		}
	}
	return $tmpstr; 									
	}
}
$mc=new MsubStr();										
?> 
<table width="204" height="195" border="0" cellpadding="0" cellspacing="0" background="images/bg.JPG">
  <tr>
    <td width="25" height="37">&nbsp;</td>
    <td width="157">&nbsp;</td>
    <td width="22">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$string="PHP语句测试";
			if(strlen($string)>10){
				echo substr($string,0,12)."...";
			}else{
				echo $string;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$string="PHP测试2";
			if(strlen($string)>10){
				echo substr($string,0,9)."...";
			}else{
				echo $string;
			}
		?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>
		<?php 
			$strs="PHP编程字典";
			if(strlen($string)>10){
				echo $mc ->csubstr($strs, "0" , "9")."...";
			}else{
				echo $strs;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$strs="测试4PHP";
			if(strlen($string)>30){
				echo $mc ->csubstr($strs, "0" , "20")."...";
			}else{
				echo $strs;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
