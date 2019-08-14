<table width="210" height="193" border="0" cellpadding="0" cellspacing="0" background="images/shop_06.gif">
	<tr>
		<td height="35" width="17"></td>
        <td width="193" align="left" valign="top" class="exam"></td>
  </tr>
  	<tr>
		<td height="21" width="17"></td>
        <td width="193" align="left" valign="top" class="exam">
         {section name=ids loop=$arrs}
         	<a href="#" class="lk" onClick="return showme({$arrs[ids].id},'showpub.php');" ><img src="images/man.JPG" width="14" height="11" border="0" />{$arrs[ids].title}</a><br />
         {/section}
      </td>
  </tr>
  <tr>
		<td height="20" width="17"></td>
        <td width="193" align="left" valign="bottom" class="exam"><a href="?page=allpub" class="lk">>>more<<</a></td>
  </tr>
</table>
