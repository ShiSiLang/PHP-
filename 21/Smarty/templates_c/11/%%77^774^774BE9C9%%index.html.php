<?php /* Smarty version 2.6.19, created on 2016-06-28 05:25:02
         compiled from index.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" href="css/style.css" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>
<center>
<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle"><img src="images/shop_14.JPG" width="643" height="33" /></td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle">  
	
	<?php if ($this->_tpl_vars['istr'] == 'T'): ?>
	
      <table width="380" height="134" border="0" cellspacing="0" cellpadding="0">
         <?php 
      $i=1; 
       ?>
      <?php unset($this->_sections['shopping_id']);
$this->_sections['shopping_id']['name'] = 'shopping_id';
$this->_sections['shopping_id']['loop'] = is_array($_loop=$this->_tpl_vars['shopping']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['shopping_id']['show'] = true;
$this->_sections['shopping_id']['max'] = $this->_sections['shopping_id']['loop'];
$this->_sections['shopping_id']['step'] = 1;
$this->_sections['shopping_id']['start'] = $this->_sections['shopping_id']['step'] > 0 ? 0 : $this->_sections['shopping_id']['loop']-1;
if ($this->_sections['shopping_id']['show']) {
    $this->_sections['shopping_id']['total'] = $this->_sections['shopping_id']['loop'];
    if ($this->_sections['shopping_id']['total'] == 0)
        $this->_sections['shopping_id']['show'] = false;
} else
    $this->_sections['shopping_id']['total'] = 0;
if ($this->_sections['shopping_id']['show']):

            for ($this->_sections['shopping_id']['index'] = $this->_sections['shopping_id']['start'], $this->_sections['shopping_id']['iteration'] = 1;
                 $this->_sections['shopping_id']['iteration'] <= $this->_sections['shopping_id']['total'];
                 $this->_sections['shopping_id']['index'] += $this->_sections['shopping_id']['step'], $this->_sections['shopping_id']['iteration']++):
$this->_sections['shopping_id']['rownum'] = $this->_sections['shopping_id']['iteration'];
$this->_sections['shopping_id']['index_prev'] = $this->_sections['shopping_id']['index'] - $this->_sections['shopping_id']['step'];
$this->_sections['shopping_id']['index_next'] = $this->_sections['shopping_id']['index'] + $this->_sections['shopping_id']['step'];
$this->_sections['shopping_id']['first']      = ($this->_sections['shopping_id']['iteration'] == 1);
$this->_sections['shopping_id']['last']       = ($this->_sections['shopping_id']['iteration'] == $this->_sections['shopping_id']['total']);
?>
	      <tr>
            <td width="135" rowspan="5" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['shopping'][$this->_sections['shopping_id']['index']]['pics']; ?>
" width="95" height="100" alt="<?php echo $this->_tpl_vars['shopping'][$this->_sections['shopping_id']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">图书名称：<?php echo $this->_tpl_vars['shopping'][$this->_sections['shopping_id']['index']]['name']; ?>
</td>
            </tr>
          <tr>
            <td height="23">图书品牌：<?php echo $this->_tpl_vars['shopping'][$this->_sections['shopping_id']['index']]['brand']; ?>
</td>
            </tr>
          <tr>
            <td width="160" height="23">剩余数量：<?php echo $this->_tpl_vars['shopping'][$this->_sections['shopping_id']['index']]['stocks']; ?>
</td>
            </tr>
          <tr>
            <td height="23">市场价：<font color="red"><?php echo $this->_tpl_vars['shopping'][$this->_sections['shopping_id']['index']]['m_price']; ?>
&nbsp;元</font></td>
            </tr>
          <tr>
            <td height="30">会员价格：<font color="#FF0000"><?php echo $this->_tpl_vars['shopping'][$this->_sections['shopping_id']['index']]['v_price']; ?>
&nbsp;元</font></td>
            </tr>
		      <?php 
      $i++; 
       ?>
      <?php endfor; endif; ?>
      </table>
		<table width="100%" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                 <td align="center" class="STYLE4">&nbsp;<?php echo $this->_tpl_vars['showpage']; ?>
</td>
               </tr>
      </table>
      <hr style="border: 1px solid #f0f0f0;" />
	 <?php endif; ?>
 <?php if ($this->_tpl_vars['iscommo'] == 'F' && $this->_tpl_vars['istr'] == 'F'): ?>
 <table width="96%" height="30" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#58BAE9">
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"><font color="#FF0000">无图书</font></div></td>
  </tr>
</table>
<?php endif; ?>
   
	  
    </td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>