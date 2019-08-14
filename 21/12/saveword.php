<?php
require_once("system/system.inc.php");  //调用指定的文件
$title=$_POST['title'];					//获取标题
$content=$_POST['content'];				//获取内容
$createtime=date("Y-m-j H:i:s");		//获取提交时间
$arraybbstell=$admindb->ExecSQL("insert into tb_guestbook(title,content,createtime,integral) values ('$title','$content','$createtime',0)",$conn); 		//执行添加操作
if($arraybbstell){
 	echo "<script>alert('留言发表成功!');window.location.href='index.php';</script>";
}else{
  	echo "<script>alert('留言发表失败!');history.back();</script>";
} 
?>