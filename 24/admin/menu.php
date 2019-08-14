<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
?>
<script language="javascript" src="js/changemenu.js"></script>
<link rel="stylesheet" href="css/menu.css" />
    <select id="bigclass" name="bigclass" onchange="changetype(this.value)">
	<option value="0">请选择类别</option>
	<?php
	$sql="select * from tb_class where supid = 0 ";
	$result=$conn->prepare($sql);			//准备查询语句
	$result->execute();						//执行查询语句，并返回结果集
	while($rst=$result->fetch(PDO::FETCH_ASSOC)){	//循环输出查询结果集，并且设置结果集的为关联索引

	?>
	<option value="<?php echo $rst['id'];?>" <?php if(isset($_GET['id']) && $_GET['id']==$rst['id']){echo 'selected=selected';}?>><?php echo $rst['name'];?></option>
	<?php
		}
	?>
</select>
<select id="smallclass" name="smallclass" onchange="changestype(this.value)">
<option value="0">请选择类别</option>

	<?php
		if(isset($_GET['id'])){
			$sqls="select * from tb_class where supid ='".$_GET['id']."'";
			$results=$conn->prepare($sqls);			//准备查询语句
			$results->execute();						//执行查询语句，并返回结果集
   			while($ret=$results->fetch(PDO::FETCH_ASSOC)){	//循环输出查询结果集，并且设置结果集的为关联索引
	?>
     
	<option value="<?php echo $ret['id'];?>"><?php echo $ret['name'];?></option>
	<?php
				
			}
		}

	?>
    </select>
	<font color="#FF0000">*</font> 