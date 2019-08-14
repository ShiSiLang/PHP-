<?php
	header('Content-type: text/html;charset=GB2312'); 				//指定发送数据的编码格式
	include_once 'conn/conn.php';								//连接数据库
	$cont = $_GET['cont'];									//获取Ajax传递的查询关键字
	if(!empty($_GET['cont'])){								//判断如果关键字不为空
		$sql = "select * from tb_administrator where explains like '%".$cont."%'";	//定义SQL语句
		$result=mysqli_query($conn,$sql);					//执行模糊查询
		if(mysqli_num_rows($result)>0){				//获取查询结果
			echo "<table width='500' border='1' cellpadding='1' cellspacing='1' bordercolor='#FFFFCC' bgcolor='#666666'>";
			echo "<tr><td height='30' align='center' bgcolor='#FFFFFF'>ID</td><td align='center' bgcolor='#FFFFFF'>名称</td><td align='center' bgcolor='#FFFFFF'>编号</td><td align='center' bgcolor='#FFFFFF'>描述</td></tr>";
 			while($myrow=mysqli_fetch_array($result)){ 						//循环输出查询结果
 				echo "<tr><td height='22' bgcolor='#FFFFFF'>".$myrow['id']."</td>";
  				echo "<td bgcolor='#FFFFFF'>".$myrow['user']."</td>";
				echo "<td bgcolor='#FFFFFF'>".$myrow['number']."</td>";
				echo "<td bgcolor='#FFFFFF'>".$myrow['explains']."</td>";
				echo "</tr>";
			}
			echo "</table>";  
		}else{
			echo "没有符合条件的数据";
		}
	}
?>