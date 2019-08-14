<?php
/*  定义服务器的绝对路径  */
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
/*  定义Smarty目录的绝对路径  */
define('SMARTY_PATH','\TM\sl\21\1\Smarty\\');
/*  加载Smarty类库文件    */
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';
/*  实例化一个Smarty对象  */
$smarty = new Smarty;
/*  定义各个目录的路径    */
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';

/*  使用Smarty赋值方法将一对名称/方法发送到模板中  */
$smarty->assign('title','第一个Smarty程序');
$smarty->assign('content','Hello,Welcome to study \'Smarty\'!');
/*  显示模板  */
$smarty->display('index.html');
?>