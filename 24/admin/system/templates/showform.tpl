<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="../../css/table.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/shwform.js"></script>
<body>
<table width="785" border="0" align="left" cellpadding="0" cellspacing="0">
  <form id="shwfrm" name="shwfrm" method="post" action"#">
    <tr>
      <td height="25" align="center" valign="middle" class="first">删除</td>
      <td height="25" align="center" valign="middle" class="first">订单号</td>
      <td height="25" align="center" valign="middle" class="first">购买用户</td>
      <td height="25" align="center" valign="middle" class="first">接收人</td>
      <td height="25" align="center" valign="middle" class="first">消费金额</td>
      <td height="25" align="center" valign="middle" class="first">付款方式</td>
      <td height="25" align="center" valign="middle" class="first">送货方式</td>
      <td height="25" align="center" valign="middle" class="first">订单状态</td>
      <td height="25" align="center" valign="middle" class="first">查看</td>
      <td height="25" align="center" valign="middle" class="first">处理</td>
    </tr>
    {section name=for_id loop=$formarr}
    <tr>
      <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" class="left" value="{$formarr[for_id].id}" /></td>
      <td height="25" align="center" valign="middle" class="center">{$formarr[for_id].formid}</td>
      <td height="25" align="center" valign="middle" class="center">{$formarr[for_id].vendee}</td>
      <td height="25" align="center" valign="middle" class="center">{$formarr[for_id].taker}</td>
      <td height="25" align="center" valign="middle" class="center">{$formarr[for_id].total}</td>
      <td height="25" align="center" valign="middle" class="center">{$formarr[for_id].pay_method}</td>
      <td height="25" align="center" valign="middle" class="center">{$formarr[for_id].del_method}</td>
      <td height="25" align="center" valign="middle" class="center">{if $formarr[for_id].state == 0}未处理{elseif $formarr[for_id].state == 1}已收款{elseif $formarr[for_id].state == 2}已发货{elseif $formarr[for_id].state == 3}已收货{/if}</td>
      <td height="25" align="center" valign="middle" class="right"><input id="lookform" name="lookform[]" type="button" class="btn" value="查看" style="border-color:#ffffff; cursor:hand;" onclick="showforminfo({$formarr[for_id].id})" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="deal" name="deal" type="button" value="请求处理" class="btn" style="border-color:#ffffff; width:100px; cursor: hand;" onclick="showme({$formarr[for_id].formid})" /></td>
    </tr>
    {/section}
    <tr>
      <td height="30" colspan="10" align="center" valign="middle"><a href="#" onclick="return alldel(shwfrm);">全选</a> <a href="#" onclick="return overdel(shwfrm);">反选</a>&nbsp;&nbsp;
          <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick = 'return del(shwfrm)' />      </td>
    </tr>
	  </form>
    <tr>
      <td height="30" colspan="10" align="left" valign="middle"><div id="chdl" style="display:none;">
  <table width="525" border="0" align="center" cellpadding="0" cellspacing="0">
    <form id="changedeal" name="changedeal" method="post">
      <tr>
        <td height="25" colspan="6" align="center" valign="middle" class="first">订单处理</td>
      </tr>
      <tr>
        <td width="75" height="25" align="center" valign="middle" class="left">订单号：</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><div id="formid">&nbsp;</div></td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptmon" name="acceptsend" type="radio" value="1" checked="checked" />已收款</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="sendwa" name="acceptsend" type="radio" value="2" />已发货</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptwa" name="acceptsend" type="radio" value="3" />已收货</td>
        <td width="50" height="25" align="center" valign="middle" class="right"><input id="chg" name="chg" type="button" class="btn" value="修改" style="border-color:#FFFFFF;" onclick="return changeme(changedeal)" /></td>
      </tr>
    </form>
  </table>
</div>
</td>
    </tr>

</table>

</body>
</html>
