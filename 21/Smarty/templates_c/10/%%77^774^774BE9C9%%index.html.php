<?php /* Smarty version 2.6.19, created on 2016-06-28 05:24:56
         compiled from index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>将Smarty的配置方法封装到类中</title>
</head>
<link rel="stylesheet" href="css/style.css" />
<body>
<table width="636" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF8B04">
  <tr>
    <td height="33" align="left" valign="middle" bgcolor="#FFFFFF"><img src="images/shop_14.JPG" width="643" height="33" /></td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle" bgcolor="#FFFFFF">  <?php if ($this->_tpl_vars['iscommo'] == 'T'): ?>
	
      <table width="372" height="134" border="0" cellspacing="0" cellpadding="0">

      <?php unset($this->_sections['bookid']);
$this->_sections['bookid']['name'] = 'bookid';
$this->_sections['bookid']['loop'] = is_array($_loop=$this->_tpl_vars['arraybook']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['bookid']['show'] = true;
$this->_sections['bookid']['max'] = $this->_sections['bookid']['loop'];
$this->_sections['bookid']['step'] = 1;
$this->_sections['bookid']['start'] = $this->_sections['bookid']['step'] > 0 ? 0 : $this->_sections['bookid']['loop']-1;
if ($this->_sections['bookid']['show']) {
    $this->_sections['bookid']['total'] = $this->_sections['bookid']['loop'];
    if ($this->_sections['bookid']['total'] == 0)
        $this->_sections['bookid']['show'] = false;
} else
    $this->_sections['bookid']['total'] = 0;
if ($this->_sections['bookid']['show']):

            for ($this->_sections['bookid']['index'] = $this->_sections['bookid']['start'], $this->_sections['bookid']['iteration'] = 1;
                 $this->_sections['bookid']['iteration'] <= $this->_sections['bookid']['total'];
                 $this->_sections['bookid']['index'] += $this->_sections['bookid']['step'], $this->_sections['bookid']['iteration']++):
$this->_sections['bookid']['rownum'] = $this->_sections['bookid']['iteration'];
$this->_sections['bookid']['index_prev'] = $this->_sections['bookid']['index'] - $this->_sections['bookid']['step'];
$this->_sections['bookid']['index_next'] = $this->_sections['bookid']['index'] + $this->_sections['bookid']['step'];
$this->_sections['bookid']['first']      = ($this->_sections['bookid']['iteration'] == 1);
$this->_sections['bookid']['last']       = ($this->_sections['bookid']['iteration'] == $this->_sections['bookid']['total']);
?>
	      <tr>
            <td width="135" rowspan="5" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['arraybook'][$this->_sections['bookid']['index']]['pics']; ?>
" width="95" height="100" alt="<?php echo $this->_tpl_vars['arraybook'][$this->_sections['bookid']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">图书名称：<?php echo $this->_tpl_vars['arraybook'][$this->_sections['bookid']['index']]['name']; ?>
</td>
        </tr>
          <tr>
            <td height="23">图书品牌：<?php echo $this->_tpl_vars['arraybook'][$this->_sections['bookid']['index']]['brand']; ?>
</td>
        </tr>
          <tr>
            <td width="160" height="23">剩余数量：<?php echo $this->_tpl_vars['arraybook'][$this->_sections['bookid']['index']]['stocks']; ?>
</td>
        </tr>
          <tr>
            <td height="23">市场价：<font color="red"><?php echo $this->_tpl_vars['arraybook'][$this->_sections['bookid']['index']]['m_price']; ?>
&nbsp;元</font></td>
        </tr>
          <tr>
            <td height="30">会员价格：<font color="#FF0000"><?php echo $this->_tpl_vars['arraybook'][$this->_sections['bookid']['index']]['v_price']; ?>
&nbsp;元</font></td>
        </tr>
      <?php endfor; endif; ?>
      </table>
      <hr style="border: 1px solid #f0f0f0;" />
	 <?php endif; ?> 
    </td>
  </tr>
</table>
</body>
</html>
