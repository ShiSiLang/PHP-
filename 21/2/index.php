<?php
	include_once("../config.php");
	$arr = array('computerbook','name' => 'PHP','unit_price' => array('price' => '65.00','unit' => '��'));
	$smarty->assign('title','Smarty');
	$smarty->assign('arr',$arr);
	$smarty->display('index.html');
?>