<?php
    include("../config.php");
    $obj = array(array("id" => 1, "bigclass" => "计算机图书","smallclass" => array(array("s_id" => 1, "s_type" => "PHP"))),array("id" => 2, "bigclass" => "历史传记","smallclass" => array(array("s_id" => 2, "s_type" => "中国历史"), array("s_id" => 3, "s_type" => "世界历史"))),array("id" => 3, "bigclass" => "畅销小说","smallclass" => array(array("s_id" => 4, "s_type" => "网络小说"),array("s_id" => 5, "s_type" => "科幻小说"))));
	$smarty->assign('title','section循环控制');
    $smarty->assign("obj", $obj);
    $smarty->display("08/index.html");
?> 
