<?php
	header('Content-type: text/html;charset=GB2312'); 				//ָ���������ݵı����ʽ
	include_once 'conn/conn.php';								//�������ݿ�
	$cont = $_GET['cont'];									//��ȡAjax���ݵĲ�ѯ�ؼ���
	if(!empty($_GET['cont'])){								//�ж�����ؼ��ֲ�Ϊ��
		$sql = "select * from tb_administrator where explains like '%".$cont."%'";	//����SQL���
		$result=mysqli_query($conn,$sql);					//ִ��ģ����ѯ
		if(mysqli_num_rows($result)>0){				//��ȡ��ѯ���
			echo "<table width='500' border='1' cellpadding='1' cellspacing='1' bordercolor='#FFFFCC' bgcolor='#666666'>";
			echo "<tr><td height='30' align='center' bgcolor='#FFFFFF'>ID</td><td align='center' bgcolor='#FFFFFF'>����</td><td align='center' bgcolor='#FFFFFF'>���</td><td align='center' bgcolor='#FFFFFF'>����</td></tr>";
 			while($myrow=mysqli_fetch_array($result)){ 						//ѭ�������ѯ���
 				echo "<tr><td height='22' bgcolor='#FFFFFF'>".$myrow['id']."</td>";
  				echo "<td bgcolor='#FFFFFF'>".$myrow['user']."</td>";
				echo "<td bgcolor='#FFFFFF'>".$myrow['number']."</td>";
				echo "<td bgcolor='#FFFFFF'>".$myrow['explains']."</td>";
				echo "</tr>";
			}
			echo "</table>";  
		}else{
			echo "û�з�������������";
		}
	}
?>