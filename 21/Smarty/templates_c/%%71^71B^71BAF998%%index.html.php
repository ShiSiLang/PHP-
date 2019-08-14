<?php /* Smarty version 2.6.19, created on 2016-06-28 05:24:20
         compiled from 02/index.html */ ?>
<html>
<head>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>
购书信息：<p>
图书类别：<?php echo $this->_tpl_vars['arr'][0]; ?>
<br />
图书名称：<?php echo $this->_tpl_vars['arr']['name']; ?>
<br />
图书单价：<?php echo $this->_tpl_vars['arr']['unit_price']['price']; ?>
/<?php echo $this->_tpl_vars['arr']['unit_price']['unit']; ?>

</body>
</html>