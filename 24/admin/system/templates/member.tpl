<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/member.js"></script>
<link rel="stylesheet" href="css/table.css" />
<title>{$title}</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="showmem" name="showmem" method="post" action="#">
  <tr>
    <td height="25" colspan="5" align="center" valign="middle" class="first">会员管理</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">昵称</td>
    <td height="25" align="center" valign="middle" class="center">状态</td>
    <td height="25" align="center" valign="middle" class="right">查看信息</td>
  </tr>
{section name=mem_id loop=$memarr}
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="{$key}"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$memarr[mem_id].id}</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;{$memarr[mem_id].name}</td>
    <td height="25" align="center" valign="middle" class="center">
   <input id="free" name="free" type="button" class="btn" value = "{if $memarr[mem_id].isfreeze == 0}未冻结 {elseif $memarr[mem_id].isfreeze == 1}冻结{/if}" style="border-color: #FFFFFF;" onClick="return changestate({ $memarr[mem_id].id},{ $memarr[mem_id].isfreeze})">
    </td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="show" name="show{ $memarr[mem_id].id}" type='button' value="详细信息" class="btn" style=" border-color: #FFFFFF; cursor: hand;" onclick="showme({ $memarr[mem_id].id})"/></td>
  </tr>
{/section} 
  <tr>
    <td colspan="5"><a href="#" onclick="return alldel(showmem)">全选</a> <a href="#" onclick="return overdel(showmem);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" onClick = 'return deletemem(showmem);'>
      &nbsp;&nbsp;</td>
     </tr>
</form>
</table>

</body>
</html>
