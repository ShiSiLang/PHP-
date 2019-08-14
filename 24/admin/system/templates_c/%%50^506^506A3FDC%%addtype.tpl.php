<?php /* Smarty version 2.6.19, created on 2016-06-29 12:22:25
         compiled from addtype.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/chktype.js"></script>
<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
<form id="addtype" name="addtype" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">添加商品类别</td>
	</tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">类别名称：</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<input name="names" type="text" id="names" class="txt" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
      </td>
    </tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">类别等级：</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<select name="grade" OnChange="changetype(addtype)" class="txt">
                <option value="1">一级类别</option>
                <option value="2" selected>二级类别</option>
            </select>
      </td>
    </tr>
    <tr>
        <td height="25" align="right" valign="middle" class="left">父级名称：</td>
        <td height="25" align="left" valign="middle" class="right">&nbsp;<select name="supid">
<?php unset($this->_sections['f_id']);
$this->_sections['f_id']['name'] = 'f_id';
$this->_sections['f_id']['loop'] = is_array($_loop=$this->_tpl_vars['f_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['f_id']['show'] = true;
$this->_sections['f_id']['max'] = $this->_sections['f_id']['loop'];
$this->_sections['f_id']['step'] = 1;
$this->_sections['f_id']['start'] = $this->_sections['f_id']['step'] > 0 ? 0 : $this->_sections['f_id']['loop']-1;
if ($this->_sections['f_id']['show']) {
    $this->_sections['f_id']['total'] = $this->_sections['f_id']['loop'];
    if ($this->_sections['f_id']['total'] == 0)
        $this->_sections['f_id']['show'] = false;
} else
    $this->_sections['f_id']['total'] = 0;
if ($this->_sections['f_id']['show']):

            for ($this->_sections['f_id']['index'] = $this->_sections['f_id']['start'], $this->_sections['f_id']['iteration'] = 1;
                 $this->_sections['f_id']['iteration'] <= $this->_sections['f_id']['total'];
                 $this->_sections['f_id']['index'] += $this->_sections['f_id']['step'], $this->_sections['f_id']['iteration']++):
$this->_sections['f_id']['rownum'] = $this->_sections['f_id']['iteration'];
$this->_sections['f_id']['index_prev'] = $this->_sections['f_id']['index'] - $this->_sections['f_id']['step'];
$this->_sections['f_id']['index_next'] = $this->_sections['f_id']['index'] + $this->_sections['f_id']['step'];
$this->_sections['f_id']['first']      = ($this->_sections['f_id']['iteration'] == 1);
$this->_sections['f_id']['last']       = ($this->_sections['f_id']['iteration'] == $this->_sections['f_id']['total']);
?>
          <option value="<?php echo $this->_tpl_vars['f_arr'][$this->_sections['f_id']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['f_arr'][$this->_sections['f_id']['index']]['name']; ?>
</option>
<?php endfor; endif; ?>
        </select>
        </td>
    </tr>
    <tr>
        <td height="30" colspan="2" align="center" valign="middle">
        	<input id="add" name="id" type="button" value="添加" class="btn" onClick="chktype(addtype)">
        </td>
    </tr>
</form>
</table>