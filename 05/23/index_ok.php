<?php 
if((strlen($_POST['IDcard'])<>15)&&(strlen($_POST['IDcard'])<>18)){						 //����û�����֤�ŵĳ����Ƿ���ȷ
	echo "<script>alert('输入身份证号码不是在15-18位之间!'); history.back();</script>";
}
else{
	echo "输入符合要求";
}
?>
