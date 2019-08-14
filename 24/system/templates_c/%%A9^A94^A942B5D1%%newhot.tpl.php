<?php /* Smarty version 2.6.19, created on 2016-06-28 10:20:36
         compiled from newhot.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'newhot.tpl', 19, false),)), $this); ?>
<link rel="stylesheet" href="css/newhot.css" />
<link href="css/top.css" rel="stylesheet" type="text/css" />
<link href="css/nominate.css" rel="stylesheet" type="text/css" />
<link href="css/links.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="643" border="0" cellpadding="0" cellspacing="0" style=" border: 3px solid #f0f0f0;" >
	<tr>
		<td colspan="2" height="2"></td>
	</tr>
	<tr>
	  <td width="321" height="33" align="center" background="images/shop_07.gif"><div class="new"><a href="?page=nom" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	 </td>
	  <td width="322" height="33" align="right" background="images/shop_14.gif"><div class="hot"><a href="?page=hot" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	  &nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
	<tr>
	  <td align="center" valign="top" style="border-right: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr><?php echo smarty_function_counter(array('start' => 1,'skip' => 1,'direction' => 'up','print' => false,'assign' => 'count'), $this);?>
 <?php unset($this->_sections['new_id']);
$this->_sections['new_id']['name'] = 'new_id';
$this->_sections['new_id']['loop'] = is_array($_loop=$this->_tpl_vars['newarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['new_id']['show'] = true;
$this->_sections['new_id']['max'] = $this->_sections['new_id']['loop'];
$this->_sections['new_id']['step'] = 1;
$this->_sections['new_id']['start'] = $this->_sections['new_id']['step'] > 0 ? 0 : $this->_sections['new_id']['loop']-1;
if ($this->_sections['new_id']['show']) {
    $this->_sections['new_id']['total'] = $this->_sections['new_id']['loop'];
    if ($this->_sections['new_id']['total'] == 0)
        $this->_sections['new_id']['show'] = false;
} else
    $this->_sections['new_id']['total'] = 0;
if ($this->_sections['new_id']['show']):

            for ($this->_sections['new_id']['index'] = $this->_sections['new_id']['start'], $this->_sections['new_id']['iteration'] = 1;
                 $this->_sections['new_id']['iteration'] <= $this->_sections['new_id']['total'];
                 $this->_sections['new_id']['index'] += $this->_sections['new_id']['step'], $this->_sections['new_id']['iteration']++):
$this->_sections['new_id']['rownum'] = $this->_sections['new_id']['iteration'];
$this->_sections['new_id']['index_prev'] = $this->_sections['new_id']['index'] - $this->_sections['new_id']['step'];
$this->_sections['new_id']['index_next'] = $this->_sections['new_id']['index'] + $this->_sections['new_id']['step'];
$this->_sections['new_id']['first']      = ($this->_sections['new_id']['iteration'] == 1);
$this->_sections['new_id']['last']       = ($this->_sections['new_id']['iteration'] == $this->_sections['new_id']['total']);
?>
          <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $this->_tpl_vars['newarr'][$this->_sections['new_id']['index']]['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['newarr'][$this->_sections['new_id']['index']]['name']; ?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $this->_tpl_vars['newarr'][$this->_sections['new_id']['index']]['id']; ?>
)" /></a></td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle"><?php echo $this->_tpl_vars['newarr'][$this->_sections['new_id']['index']]['name']; ?>
</td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['newarr'][$this->_sections['new_id']['index']]['m_price']; ?>
&nbsp;元</td>
                </tr>
                <tr>
                  <td height="16" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['newarr'][$this->_sections['new_id']['index']]['v_price']; ?>
&nbsp;元</td>
                </tr>
            </table></td>
			<?php echo smarty_function_counter(array(), $this);?>

          <?php if ($this->_tpl_vars['count'] % 2 != 0): ?> </tr>
	    <tr> <?php endif; ?>
	      <?php endfor; endif; ?> </tr>
      </table></td>
        
		<td align="center" valign="top" style="border-left: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
          <tr> <?php echo smarty_function_counter(array('start' => 1,'skip' => 1,'direction' => 'up','print' => false,'assign' => 'counts'), $this);?>
<?php unset($this->_sections['hot_id']);
$this->_sections['hot_id']['name'] = 'hot_id';
$this->_sections['hot_id']['loop'] = is_array($_loop=$this->_tpl_vars['hotarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['hot_id']['show'] = true;
$this->_sections['hot_id']['max'] = $this->_sections['hot_id']['loop'];
$this->_sections['hot_id']['step'] = 1;
$this->_sections['hot_id']['start'] = $this->_sections['hot_id']['step'] > 0 ? 0 : $this->_sections['hot_id']['loop']-1;
if ($this->_sections['hot_id']['show']) {
    $this->_sections['hot_id']['total'] = $this->_sections['hot_id']['loop'];
    if ($this->_sections['hot_id']['total'] == 0)
        $this->_sections['hot_id']['show'] = false;
} else
    $this->_sections['hot_id']['total'] = 0;
if ($this->_sections['hot_id']['show']):

            for ($this->_sections['hot_id']['index'] = $this->_sections['hot_id']['start'], $this->_sections['hot_id']['iteration'] = 1;
                 $this->_sections['hot_id']['iteration'] <= $this->_sections['hot_id']['total'];
                 $this->_sections['hot_id']['index'] += $this->_sections['hot_id']['step'], $this->_sections['hot_id']['iteration']++):
$this->_sections['hot_id']['rownum'] = $this->_sections['hot_id']['iteration'];
$this->_sections['hot_id']['index_prev'] = $this->_sections['hot_id']['index'] - $this->_sections['hot_id']['step'];
$this->_sections['hot_id']['index_next'] = $this->_sections['hot_id']['index'] + $this->_sections['hot_id']['step'];
$this->_sections['hot_id']['first']      = ($this->_sections['hot_id']['iteration'] == 1);
$this->_sections['hot_id']['last']       = ($this->_sections['hot_id']['iteration'] == $this->_sections['hot_id']['total']);
?>
            <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $this->_tpl_vars['hotarr'][$this->_sections['hot_id']['index']]['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['hotarr'][$this->_sections['hot_id']['index']]['name']; ?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $this->_tpl_vars['hotarr'][$this->_sections['hot_id']['index']]['id']; ?>
)" /></a></td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle"><?php echo $this->_tpl_vars['hotarr'][$this->_sections['hot_id']['index']]['name']; ?>
</td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['hotarr'][$this->_sections['hot_id']['index']]['m_price']; ?>
</td>
                  </tr>
                  <tr>
                    <td height="16" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['hotarr'][$this->_sections['hot_id']['index']]['v_price']; ?>
</td>
                  </tr>
              </table></td>
           <?php echo smarty_function_counter(array(), $this);?>

          <?php if ($this->_tpl_vars['counts'] % 2 != 0): ?></tr>
		  <tr> <?php endif; ?>
		    <?php endfor; endif; ?> </tr>
        </table></td>
</tr>
</table>
<table width="643" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6" width="636" height="33" align="right" valign="middle"><img src="images/shop_10.gif" width="643" height="33" border="0" usemap="#Map" /></td>
		<td rowspan="3" width="7" height="238">&nbsp;</td>
	</tr>
	<tr>
    	<td width="23" height="185">&nbsp;</td>
       <?php unset($this->_sections['nom_id']);
$this->_sections['nom_id']['name'] = 'nom_id';
$this->_sections['nom_id']['loop'] = is_array($_loop=$this->_tpl_vars['nomarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nom_id']['show'] = true;
$this->_sections['nom_id']['max'] = $this->_sections['nom_id']['loop'];
$this->_sections['nom_id']['step'] = 1;
$this->_sections['nom_id']['start'] = $this->_sections['nom_id']['step'] > 0 ? 0 : $this->_sections['nom_id']['loop']-1;
if ($this->_sections['nom_id']['show']) {
    $this->_sections['nom_id']['total'] = $this->_sections['nom_id']['loop'];
    if ($this->_sections['nom_id']['total'] == 0)
        $this->_sections['nom_id']['show'] = false;
} else
    $this->_sections['nom_id']['total'] = 0;
if ($this->_sections['nom_id']['show']):

            for ($this->_sections['nom_id']['index'] = $this->_sections['nom_id']['start'], $this->_sections['nom_id']['iteration'] = 1;
                 $this->_sections['nom_id']['iteration'] <= $this->_sections['nom_id']['total'];
                 $this->_sections['nom_id']['index'] += $this->_sections['nom_id']['step'], $this->_sections['nom_id']['iteration']++):
$this->_sections['nom_id']['rownum'] = $this->_sections['nom_id']['iteration'];
$this->_sections['nom_id']['index_prev'] = $this->_sections['nom_id']['index'] - $this->_sections['nom_id']['step'];
$this->_sections['nom_id']['index_next'] = $this->_sections['nom_id']['index'] + $this->_sections['nom_id']['step'];
$this->_sections['nom_id']['first']      = ($this->_sections['nom_id']['iteration'] == 1);
$this->_sections['nom_id']['last']       = ($this->_sections['nom_id']['iteration'] == $this->_sections['nom_id']['total']);
?> 
	  <td width="145" height="185" align="left" valign="top">
      
       	  <table width="145" border="0" cellpadding="0" cellspacing="0" >
<tr>
               	  <td height="100" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;" ></td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">&nbsp;<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['name']; ?>
</td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['m_price']; ?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="19" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['v_price']; ?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="32" align="center" valign="middle"><input id="showinfo" name="showinfo" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['id']; ?>
)"/>&nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['id']; ?>
)" /></td>
            </tr>
       	</table>
      </td>
      <?php endfor; endif; ?>
        <td width="33" height="185">&nbsp;</td>
  </tr>
	<tr>
		<td colspan="6" width="636" height="14">&nbsp;</td>
	</tr>
</table>

<map name="Map" id="Map">
<area shape="rect" coords="585,8,635,27" href="?page=new" class="lk" />
</map>