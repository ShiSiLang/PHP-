<?php
session_start();
class chkinput{
	var $name;
   	var $pwd;
   	function chkinput($x,$y){
    		$this->name=$x;
     	$this->pwd=$y;
    	}
   	function checkinput(){
     	include "conn/conn.php";
     	$sql=mysqli_query($conn,"select * from tb_user where user='".$this->name."'");
     	$info=mysqli_fetch_array($sql);
     	if($info==false){
          	echo "<script language='javascript'>alert('登录失败');history.back();</script>";
          	exit;
       	}else{
          	if($info['password']==$this->pwd){
			 	$_SESSION['admin_name']=$this->name;
             		echo "<script language='javascript'>alert('登录成功');window.location.href='index.php';</script>";
            	}else{
             		echo "<script language='javascript'>alert('密码错误');history.back();</script>";
             		exit;
           	}
      	}
   	}
}
$obj=new chkinput(trim($_POST['name']),trim(md5($_POST['pwd'])));
$obj->checkinput();
?>
