<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>查询数组中指定元素</title>

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
    <td align="center" class="STYLE1">
<?php
$name = "智能机器人@数码相机@天翼3G手机@瑞士手表";		//定义字符串
$price ="14998@2588@2666@66698";
$counts = "1@2@3@4";
$arrayid=explode("@",$name);				//将商品ID的字符串转换到字符串数组中
$arraynum=explode("@",$price);				//将商品价格的字符串转换到数组中
$arraycount=explode("@",$counts);			//将商品数量的字符串转换到数组中
if(isset($_POST['Submit']) && $_POST['Submit']==true){
	$id=$_POST['name'];							//获取要更改的元素名称
	$num=$_POST['counts'];						//获取更改的值
	$key=array_search($id,$arrayid);   			//在数组中搜索给定的值，如果成功返回键名 
	$arraycount[$key]=$num;						//更改商品数量
	$counts=implode("@",$arraycount);			//将更改后的商品数量添加到购物车中
}
?>
<table width="580" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
          <tr>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">商品名称</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">价格</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">数量</td>
            <td width="145" align="center" bgcolor="#FFFFFF"  class="STYLE1">金额</td>
 </tr>
 
<?php
for($i=0;$i<count($arrayid);$i++){
?>
<form name="form1_<?php echo $i;?>" method="post" action="index.php">
   <tr>
       <td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $arrayid[$i]; ?></td>
       <td align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $arraynum[$i]; ?></td>    
       <td align="center" bgcolor="#FFFFFF" class="STYLE2">
         <input name="counts" type="text" id="counts" value="<?php echo $arraycount[$i]; ?>" size="8">
         <input name="name" type="hidden" id="name" value="<?php echo $arrayid[$i]; ?>">
         <input type="submit" name="Submit" value="提交"></td>
       <td align="center" bgcolor="#FFFFFF" class="STYLE2"><?php echo $arraycount[$i]*$arraynum[$i]; ?></td>
</tr>
</form>
<?php
}
?>

</table>
</td>
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
