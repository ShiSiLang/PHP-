<?php /* Smarty version 2.6.19, created on 2016-06-28 05:25:06
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'Util', 'index.html', 24, false),)), $this); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script language="javascript" src="js/check.js"></script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="754" height="123"><img src="images/bgs_01.jpg" width="1003" height="305"></td>
  </tr>
</table>
<table width="1003" align="center" background="images/bgs_02.jpg">
<tr>
<td>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#97607F">
	 <?php if ($this->_tpl_vars['iscommo'] == 'T'): ?>
	<table width="754" border="0" align="center" cellpadding="0" cellspacing="1">
    <?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
	  <tr>
        <td width="151" height="25" bgcolor="#FFFFFF"><div align="center">主&nbsp;&nbsp;&nbsp;题：</div></td>
        <td width="600" bgcolor="#FFFFFF">&nbsp;<?php echo unHtml(array('text' => $this->_tpl_vars['array'][$this->_sections['id']['index']]['title']), $this);?>
</td>
      </tr>
      <tr>
        <td height="95" bgcolor="#FFFFFF"><div align="center">内&nbsp;&nbsp;&nbsp;容：</div></td>
        <td bgcolor="#FFFFFF" style="padding-left:5px; padding-right:5px; padding-top:5px; padding-bottom:5px;"><?php echo unHtml(array('text' => $this->_tpl_vars['array'][$this->_sections['id']['index']]['content']), $this);?>
</td>
      </tr>
<?php endfor; endif; ?>
    </table>
	<?php endif; ?>
	 <?php if ($this->_tpl_vars['iscommo'] == 'F'): ?>
     <table width="96%" height="30" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#58BAE9">
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"><font color="#FF0000">无图书</font></div></td>
  </tr>
</table>
<?php endif; ?>
	</td>
  </tr>
</table>
<table width="754" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="133" bgcolor="#A05282"><table width="754" height="150" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="saveword.php" onSubmit="return chkinput(this)">
	  <tr>
        <td height="20" colspan="2" bgcolor="#A15383"><div align="center" class="STYLE1">签写留言</div></td>
      </tr>
      <tr>
        <td width="149" height="25" bgcolor="#FFFFFF"><div align="center">主&nbsp;&nbsp;&nbsp;题：</div></td>
        <td width="602" bgcolor="#FFFFFF">&nbsp;<input type="text" name="title" size="35" class="inputcss"></td>
      </tr>
      <tr>
        <td height="100" bgcolor="#FFFFFF"><div align="center">内&nbsp;&nbsp;&nbsp;容：</div></td>
        <td height="100" bgcolor="#FFFFFF">&nbsp;<textarea name="content" cols="60" rows="6" class="inputcss"></textarea></td>
      </tr>
	  <tr>
        <td height="30" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input type="image" name="imageField" src="images/submit.gif">&nbsp;&nbsp;<input type="image" name="imageField2" src="images/reset.gif">
        </div></td>
        </tr>
		</form>
    </table></td>
  </tr>
</table>
</td>
</tr>
</table>
<table  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/bgs_03.jpg" width="1003" height="65"></td>
  </tr>
</table>
</body>
</html>