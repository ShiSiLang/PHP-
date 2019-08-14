<?php
class chkinput {
	var $name;
	var $pwd;
	function chkinput($x, $y) {
		$this->name = $x;
		$this->pwd = $y;
	}
	function checkinput() {
		include "conn/conn.php";
		$info = mysql_query ( "insert into tb_user(user,password)value('" . $this->name . "','" . $this->pwd . "')" );
		if ($info == false) {
			echo "<script language='javascript'>alert('会员注册失败');history.back();</script>";
			exit ();
		} else {
			$_SESSION [admin_name] = $this->name;
			echo "<script language='javascript'>alert('恭喜您，注册成功');window.location.href='index.php';</script>";
		}
	}
}
$obj = new chkinput(trim($_POST[name]), trim(md5($_POST[pwd])));
$obj->checkinput ();
?>