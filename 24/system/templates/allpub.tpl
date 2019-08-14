<table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" height="25" align="center" valign="middle" class="first">全部公告</td>
  </tr>
{section name=arr_id loop=$arr}
  <tr>
    <td width="70%" height="25" align="right" valign="middle" class="left">标题：<a href="#" onclick="return showme({$arr[arr_id].id},'showpub.php')">{$arr[arr_id].title}</a></td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;{$arr[arr_id].addtime}</td>
    </tr>
{/section}
</table>
