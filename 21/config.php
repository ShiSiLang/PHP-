<?php
/*  ����������ľ���·��  */
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
/*  ����SmartyĿ¼�ľ���·��  */
define('SMARTY_PATH','\tm\sl\21\Smarty\\');
/*  ����Smarty����ļ�    */
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';
/*  ʵ����һ��Smarty����  */
$smarty = new Smarty;
/*  �������Ŀ¼��·��    */
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';
/*  ���Կ���̨  */
//$smarty->debugging = true;
/*  ���嶨���  */
//$smarty->left_delimiter = '<{';
//$smarty->right_delimiter = '}>';
?>