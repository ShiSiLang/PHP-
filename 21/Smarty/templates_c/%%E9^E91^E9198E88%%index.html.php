<?php /* Smarty version 2.6.19, created on 2016-06-28 05:24:44
         compiled from 07/index.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>
使用foreach语句循环输出数组。<p>
<?php $_from = $this->_tpl_vars['infobook']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php echo $this->_tpl_vars['key']; ?>
 => <?php echo $this->_tpl_vars['item']; ?>
<br />
<?php endforeach; endif; unset($_from); ?>
</body>
</html>