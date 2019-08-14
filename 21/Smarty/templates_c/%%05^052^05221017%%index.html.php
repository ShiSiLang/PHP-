<?php /* Smarty version 2.6.19, created on 2016-06-28 05:24:37
         compiled from 05/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count_characters', '05/index.html', 10, false),array('modifier', 'nl2br', '05/index.html', 12, false),array('modifier', 'upper', '05/index.html', 12, false),)), $this); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
原文：<?php echo $this->_tpl_vars['str']; ?>

<p>
变量中的字符数（包括空格）：<?php echo ((is_array($_tmp=$this->_tpl_vars['str'])) ? $this->_run_mod_handler('count_characters', true, $_tmp, true) : smarty_modifier_count_characters($_tmp, true)); ?>

<br />
使用变量修饰方法后：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['str'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>

</body>
</html>