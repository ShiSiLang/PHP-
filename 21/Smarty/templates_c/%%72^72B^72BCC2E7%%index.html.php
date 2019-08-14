<?php /* Smarty version 2.6.19, created on 2016-06-28 05:24:40
         compiled from 06/index.html */ ?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel='stylesheet' href="../css/style.css" />
</head>
<body>
<p>
<?php if ($_GET['type'] == 'tm'): ?>
欢迎光临，<?php echo $_GET['type']; ?>

<?php else: ?>
对不起，您不是本站VIP，无权访问此栏目。
<?php endif; ?>
</body>
</html>