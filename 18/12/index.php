<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>应用limit子句实现分页显示</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<center>
<table width="798" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td  height="112" background="images/banner.jpg">&nbsp;</td>
    </tr>
	<tr>
		<td>
		<table width="100%" height="38" border="0" cellpadding="0" cellspacing="0" background="images/link.jpg">
			<tr>
				<td width="193" align="center" valign="middle">
				<b><?php echo date("Y-m-d");?></b></td>
				<td width="101" align="center" valign="middle"><a href="#" class="a">浏览目录</a></td>
				<td width="102" align="center" valign="middle"><a href="#">添加图书</a></td>
				<td width="101" align="center" valign="middle"><a href="#">简单查询</a></td>
				<td width="101" align="center" valign="middle"><a href="#">高级查询</a></td>
				<td width="101" align="center" valign="middle"><a href="#">分组统计</a></td>
				<td width="99" align="center" valign="middle"><a href="#">退出系统</a></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
<table width="799" height="200" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle">
<?php
include_once("conn/conn.php");//包含数据库连接文件
?>
<table width="90%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
  	<td width="5%" height="25" align="center" >id</td>
    <td width="30%" align="center" >书名</td>
    <td width="10%" align="center" >价格</td>
    <td width="20%" align="center" >出版时间</td>
    <td width="10%" align="center" >类别</td>
	<td width="10%" align="center" >操作</td>
  </tr>
<?php
	$pagesize = 3 ;									//每页显示记录数
	$sqlstr = "select * from tb_demo02 order by id";//定义查询语句
	$total = mysqli_query($conn,$sqlstr);//执行查询语句
	$totalNum = mysqli_num_rows($total);					//总记录数
	$pagecount = ceil($totalNum/$pagesize);						//总页数
	(!isset($_GET['page']))?($page = 1):$page = $_GET['page'];				//当前显示页数
	($page <= $pagecount)?$page:($page = $pagecount);//当前页大于总页数时把当前页定义为总页数
	$f_pageNum = $pagesize * ($page - 1);								//当前页的第一条记录
	$sqlstr1 = $sqlstr." limit ".$f_pageNum.",".$pagesize;//定义SQL语句，通过limit关键字控制查询范围和数量
	$result = mysqli_query($conn,$sqlstr1);								//执行查询语句
    while ($rows = mysqli_fetch_array($result)){									//循环输出查询结果
?>
  <tr>
	<td width="5%" height="25" align="center" bgcolor="#FFFFFF"><?php echo $rows[0];?></td>
    <td width="30%" align="center" bgcolor="#FFFFFF" ><?php echo $rows[1];?></td>
    <td width="10%" align="center" bgcolor="#FFFFFF" ><?php echo $rows[2];?></td>
    <td width="20%" align="center" bgcolor="#FFFFFF" ><?php echo $rows[3];?></td>
    <td width="10%" align="center" bgcolor="#FFFFFF" ><?php echo $rows[4];?></td>
	<td width="10%" align="center" bgcolor="#FFFFFF" >操作</td>
  </tr>
<?php	
	}
?>
  <tr>
	<td height="25" colspan="6" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;
<?php
    echo "共".$totalNum."本图书&nbsp;&nbsp;";
	echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
	if($page!=1){//如果当前页不是1则输出有链接的首页和上一页
	    echo "<a href='?page=1'>首页</a>&nbsp;";
		echo "<a href='?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";
	}else{//否则输出没有链接的首页和上一页
	    echo "首页&nbsp;上一页&nbsp;&nbsp;";
	}
	if($page!=$pagecount){//如果当前页不是最后一页则输出有链接的下一页和尾页
	    echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;";
		echo "<a href='?page=".$pagecount."'>尾页</a>&nbsp;&nbsp;";
	}else{//否则输出没有链接的下一页和尾页
	    echo "下一页&nbsp;尾页&nbsp;&nbsp;";
	}
?>
    </td>
  </tr>
</table>
 </td>
    </tr>
</table>
<table width="798" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="48" background="images/bottom.jpg">&nbsp;</td>
    </tr>
</table>
</center>
</body>
</html>
