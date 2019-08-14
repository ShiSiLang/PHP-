<?php 
/*	查找用户资料	*/
if(isset($_SESSION['member'])){
	$sql = "select * from tb_user where name = '".$_SESSION['member']."'";
	$arr = $admindb->ExecSQL($sql,$conn);
	if(isset($_GET['action']) && $_GET['action'] == 'modify'){
		$smarty->assign('check',"find");
		$smarty->assign('pwdarr',$arr);
	}else{
		$smarty->assign('check',"notfind");
		$smarty->assign('pwdarr',$arr);
	}
}
?>