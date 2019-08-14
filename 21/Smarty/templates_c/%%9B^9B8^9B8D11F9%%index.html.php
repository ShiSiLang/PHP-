<?php /* Smarty version 2.6.19, created on 2016-06-28 05:24:48
         compiled from 08/index.html */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<table width="100" border="0" align="left" cellpadding="0" cellspacing="0">
<?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['obj']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec1']['show'] = true;
$this->_sections['sec1']['max'] = $this->_sections['sec1']['loop'];
$this->_sections['sec1']['step'] = 1;
$this->_sections['sec1']['start'] = $this->_sections['sec1']['step'] > 0 ? 0 : $this->_sections['sec1']['loop']-1;
if ($this->_sections['sec1']['show']) {
    $this->_sections['sec1']['total'] = $this->_sections['sec1']['loop'];
    if ($this->_sections['sec1']['total'] == 0)
        $this->_sections['sec1']['show'] = false;
} else
    $this->_sections['sec1']['total'] = 0;
if ($this->_sections['sec1']['show']):

            for ($this->_sections['sec1']['index'] = $this->_sections['sec1']['start'], $this->_sections['sec1']['iteration'] = 1;
                 $this->_sections['sec1']['iteration'] <= $this->_sections['sec1']['total'];
                 $this->_sections['sec1']['index'] += $this->_sections['sec1']['step'], $this->_sections['sec1']['iteration']++):
$this->_sections['sec1']['rownum'] = $this->_sections['sec1']['iteration'];
$this->_sections['sec1']['index_prev'] = $this->_sections['sec1']['index'] - $this->_sections['sec1']['step'];
$this->_sections['sec1']['index_next'] = $this->_sections['sec1']['index'] + $this->_sections['sec1']['step'];
$this->_sections['sec1']['first']      = ($this->_sections['sec1']['iteration'] == 1);
$this->_sections['sec1']['last']       = ($this->_sections['sec1']['iteration'] == $this->_sections['sec1']['total']);
?>
    <tr>
        <td colspan="2"><?php echo $this->_tpl_vars['obj'][$this->_sections['sec1']['index']]['bigclass']; ?>
</td>
    </tr>
    <?php unset($this->_sections['sec2']);
$this->_sections['sec2']['name'] = 'sec2';
$this->_sections['sec2']['loop'] = is_array($_loop=$this->_tpl_vars['obj'][$this->_sections['sec1']['index']]['smallclass']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec2']['show'] = true;
$this->_sections['sec2']['max'] = $this->_sections['sec2']['loop'];
$this->_sections['sec2']['step'] = 1;
$this->_sections['sec2']['start'] = $this->_sections['sec2']['step'] > 0 ? 0 : $this->_sections['sec2']['loop']-1;
if ($this->_sections['sec2']['show']) {
    $this->_sections['sec2']['total'] = $this->_sections['sec2']['loop'];
    if ($this->_sections['sec2']['total'] == 0)
        $this->_sections['sec2']['show'] = false;
} else
    $this->_sections['sec2']['total'] = 0;
if ($this->_sections['sec2']['show']):

            for ($this->_sections['sec2']['index'] = $this->_sections['sec2']['start'], $this->_sections['sec2']['iteration'] = 1;
                 $this->_sections['sec2']['iteration'] <= $this->_sections['sec2']['total'];
                 $this->_sections['sec2']['index'] += $this->_sections['sec2']['step'], $this->_sections['sec2']['iteration']++):
$this->_sections['sec2']['rownum'] = $this->_sections['sec2']['iteration'];
$this->_sections['sec2']['index_prev'] = $this->_sections['sec2']['index'] - $this->_sections['sec2']['step'];
$this->_sections['sec2']['index_next'] = $this->_sections['sec2']['index'] + $this->_sections['sec2']['step'];
$this->_sections['sec2']['first']      = ($this->_sections['sec2']['iteration'] == 1);
$this->_sections['sec2']['last']       = ($this->_sections['sec2']['iteration'] == $this->_sections['sec2']['total']);
?>
    <tr>
        <td width="25">&nbsp;</td>
        <td width="75"><?php echo $this->_tpl_vars['obj'][$this->_sections['sec1']['index']]['smallclass'][$this->_sections['sec2']['index']]['s_type']; ?>
</td>
    </tr>
    <?php endfor; endif; ?>
<?php endfor; endif; ?>
</table>
</body>
</html>