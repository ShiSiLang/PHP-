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
{section name=f_id loop=$f_arr}
          <option value="{$f_arr[f_id].id}">{$f_arr[f_id].name}</option>
{/section}
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