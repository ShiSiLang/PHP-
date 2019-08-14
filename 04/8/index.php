<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>foreach语句</title>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px;
       	color: #f1b000;
	font-weight: bold;
}
.STYLE2 {font-size: 12px;
	color: #f1b000;
      

}
-->
</style>
<body>
<table width="859" height="381" border="0" cellpadding="0" cellspacing="0" background="images/bf.jpg">
  <tr>
    <td width="225" height="100">&nbsp;</td>
    <td width="624">&nbsp;</td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="230" align="left" class="STYLE1"></td>
    <td align="center" class="STYLE1"><?php
$name = array("1"=>"只能机器人","2"=>"数码相机","3"=>"天翼3G手机","4"=>"瑞士手表");
$price = array("1"=>"14998元","2"=>"2588元","3"=>"2666元","4"=>"66698元");
$counts = array("1"=>1,"2"=>1,"3"=>2,"4"=>1);
echo '<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
          <tr>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1"商品名称</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">价格</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">数量</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">金额</td>
 </tr>';
foreach($name as $key=>$value){ 		 //进行循环，实处键和值
     echo '<tr>
            <td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$value.'</td>
            <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$price[$key].'</td>    
            <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key].'</td>
            <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key]*$price[$key].'</td>
</tr>';
}
echo '</table>';
?></td>
    <td align="left" class="STYLE1"></td>
  </tr>
  <tr>
    <td align="left" class="STYLE1"></td>
    <td align="left" class="STYLE1"></td>
    <td align="left" class="STYLE1"></td>
  </tr>
</table>
</body>
</html>
