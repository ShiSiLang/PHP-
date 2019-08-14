<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/changetype.js"></script>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">查看商品类别</td>
	</tr>
{section name=big_id loop=$bigarray}
    <tr>
      <td height="25" align="center" valign="middle" class="left"><font size="2" color="#FF0000">父类：</font><input id="moditype{$bigarray[big_id].id}" name="moditype{$bigarray[big_id].id}" type="text" class="shorttxt" value="{$bigarray[big_id].name}" style="border-color:#996633;" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="javascript:modifytype({$bigarray[big_id].id});" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delbigtype({$bigarray[big_id].id});" style="border-color:#FFFFFF;"></td>
    </tr>
    {section name = small_id loop = $smallarray}
    {if $smallarray[small_id].supid == $bigarray[big_id].id}
    <tr>
      <td height="25" align="center" valign="middle" class="left" style="text-indent: 50px;" ><font size="2" color="#996600">子类：</font><input id="modtype{$smallarray[small_id].id}" name="moditype{$smallarray[small_id].id}" type="text" class="shorttxt" value="{$smallarray[small_id].name}" style="border-color:#996633;" /></td>
        <td height="25" align="center" valign="middle" class="right"><input id="modidfy" name="modify" type="button" value="修改" class="btn" onclick="javascript:modifytype({$smallarray[small_id].id})" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delsmalltype({$smallarray[small_id].id})" style="border-color:#FFFFFF;"></td>
    </tr>
  	{/if}
    {/section}
{/section}
</form>
</table>
