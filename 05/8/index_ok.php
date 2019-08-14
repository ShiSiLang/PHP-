<?php 
if(strlen($_POST['pwd'])<6){//检测用户密码的长度是否为6
echo "<script>alert('用户密码的长度不得小于6位！请重新输出'); history.back();</script>";
}
else{
	echo "用户信息输入合法";
}
?>
