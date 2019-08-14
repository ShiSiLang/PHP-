<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showmem.js"></script>
<title>{$title}</title>

<table width="400" border="0" cellpadding="0" cellspacing="1">
<form id="showmem" name="showmem" method="post" action="#"  onsubmit="return chkmem(modcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">会员信息</td>
    </tr>
	{section name=vip_id loop=$viparr}
    <tr>
        <td width="30%" height="25" class="left">会员名称：</td>
      <td width="618" class="right">{$viparr[vip_id].name}</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">消费总额：</td>
      <td width="618" class="right">{$viparr[vip_id].consume}</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">真实姓名：</td>
      <td height="25" class="right">{$viparr[vip_id].realname}</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">身份证号：</td>
      <td height="25" class="right">{$viparr[vip_id].card}</td>
    </tr>

    <tr>
        <td width="30%" height="22" class="left">移动电话：</td>
      <td height="22" class="right">{$viparr[vip_id].tel}</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">固定电话：</td>
      <td height="25" class="right">{$viparr[vip_id].phone}</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">Email：</td>
   	  <td height="25" class="right">{$viparr[vip_id].Email}</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">QQ号：</td>
      <td height="25" class="right">{$viparr[vip_id].QQ}</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">邮编：</td>
   	  <td height="25" class="right">&nbsp;{$viparr[vip_id].code}</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">地址：</td>
      <td height="25" class="right">{$viparr[vip_id].address}</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">是否冻结：</td>
      <td height="25" class="right"><div id="isfree">
       {if $viparr[vip_id].isfreeze==1}冻结
      {else}未冻结{/if}</div></td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">注册时间：</td>
      <td height="25" class="right">{ $viparr[vip_id].addtime }</td>
      </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="free" name="free" type="button" class="btn" value="{if $viparr[vip_id].isfreeze==1}解冻{else}冻结{/if}" onClick= "return changestate({$id},{$viparr[vip_id].isfreeze})">
    	&nbsp;&nbsp;
   	  <input id="del" name="del" type="button" value="删除" class="btn" onclick="return dele({$id})"></td>
    </tr>
	{/section}
	</form>
</table>

</body>
</html>
