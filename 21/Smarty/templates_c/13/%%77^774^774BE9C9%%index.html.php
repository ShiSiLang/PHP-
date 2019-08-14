<?php /* Smarty version 2.6.19, created on 2016-06-28 05:25:10
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'index.html', 13, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>解决smarty中truncate方法截取中文乱码</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
     <table width="383" height="183" border="0">
           <tr>
             <td><?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
         	<img src="images/man.JPG" width="14" height="11" border="0" /><a href="#?id=<?php echo $this->_tpl_vars['arr'][$this->_sections['id']['index']]['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['arr'][$this->_sections['id']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 8, "...") : smarty_modifier_truncate($_tmp, 8, "...")); ?>
</a><br />
         <?php endfor; endif; ?> </td>
             <td><?php unset($this->_sections['ids']);
$this->_sections['ids']['name'] = 'ids';
$this->_sections['ids']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ids']['show'] = true;
$this->_sections['ids']['max'] = $this->_sections['ids']['loop'];
$this->_sections['ids']['step'] = 1;
$this->_sections['ids']['start'] = $this->_sections['ids']['step'] > 0 ? 0 : $this->_sections['ids']['loop']-1;
if ($this->_sections['ids']['show']) {
    $this->_sections['ids']['total'] = $this->_sections['ids']['loop'];
    if ($this->_sections['ids']['total'] == 0)
        $this->_sections['ids']['show'] = false;
} else
    $this->_sections['ids']['total'] = 0;
if ($this->_sections['ids']['show']):

            for ($this->_sections['ids']['index'] = $this->_sections['ids']['start'], $this->_sections['ids']['iteration'] = 1;
                 $this->_sections['ids']['iteration'] <= $this->_sections['ids']['total'];
                 $this->_sections['ids']['index'] += $this->_sections['ids']['step'], $this->_sections['ids']['iteration']++):
$this->_sections['ids']['rownum'] = $this->_sections['ids']['iteration'];
$this->_sections['ids']['index_prev'] = $this->_sections['ids']['index'] - $this->_sections['ids']['step'];
$this->_sections['ids']['index_next'] = $this->_sections['ids']['index'] + $this->_sections['ids']['step'];
$this->_sections['ids']['first']      = ($this->_sections['ids']['iteration'] == 1);
$this->_sections['ids']['last']       = ($this->_sections['ids']['iteration'] == $this->_sections['ids']['total']);
?>
         	<img src="images/man.JPG" width="14" height="11" border="0" /><a href="#?id=<?php echo $this->_tpl_vars['arr'][$this->_sections['ids']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['arr'][$this->_sections['ids']['index']]['title']; ?>
</a><br />
         <?php endfor; endif; ?> </td>
           </tr>
         </table>
</body>
</html>
