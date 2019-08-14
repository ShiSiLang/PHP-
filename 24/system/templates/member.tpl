<link rel="stylesheet" href="css/member.css" />
<script language="javascript" src="js/member.js"></script>
{if $check=="find" }
<p align="left">{$smarty.session.member}&gt;&gt;&gt;<a href='?page_type=hyzx' id="mem">查看信息</a>&gt;&gt;&gt;<a href='?page_type=hyzx&action=modify' id="mem">修改密码</a></p>
<table  id="member" width="300" border="0" cellpadding="0" cellspacing="0">
<form id="member" name="member" method="post" action="modify_pwd_chk.php" onSubmit="return pwd(member)">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0">修改密码</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">原密码：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="old" name="old" type="password" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">新密码：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="new1" name="new1" type="password" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">确认密码：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="new2" name="new2" type="password" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="修改" /></td>
  </tr>
</form>
</table>
{else}
<p align="left">{$smarty.session.member}&gt;&gt;&gt;<a href='?page_type=hyzx' id="mem">查看信息</a>&gt;&gt;&gt;<a href='?page_type=hyzx&action=modify' id="mem">修改密码</a></p>
{section name=pwd_id loop=$pwdarr}
<table id='member' width="500" border="0" cellpadding="0" cellspacing="0">
<form id="member" name="member" method="post" action="modify_info_chk.php" onSubmit="return mem(member)" >
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0">{$pwdarr[pwd_id].name}信息（不可更改信息）</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 会员编号：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;{$pwdarr[pwd_id].id}</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 会员名称：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;{$pwdarr[pwd_id].name}</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 密保问题：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;{$pwdarr[pwd_id].question}</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">密保答案：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;{$pwdarr[pwd_id].answer}</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left"> 注册时间：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;{$pwdarr[pwd_id].addtime}</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">消费总额：</td>
    <td height="25" align="left" valign="middle" id="right">&nbsp;{$pwdarr[pwd_id].consume}</td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" id="first"><font color="#f0f0f0">{$pwdarr[pwd_id].name}信息（可更改信息）</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">真实姓名：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="realname" name="realname" type="text" value="{$pwdarr[pwd_id].realname}" />&nbsp;
      <input type="hidden" name="userid" value="{$pwdarr[pwd_id].id}" />
      <font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">身份证号：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="card" name="card" type="text" value="{$pwdarr[pwd_id].card}" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">移动电话：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="tel" name="tel" type="text" value="{$pwdarr[pwd_id].tel}">&nbsp;<font color="red">*</font> </td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">固定电话：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="phone" name="phone" type="text" value="{$pwdarr[pwd_id].phone}" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">Email：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="email" name="email" type="text" value="{$pwdarr[pwd_id].Email}" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">QQ号：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="qq" name="qq" type="text" value="{$pwdarr[pwd_id].QQ}" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">邮编：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="code" name="code" type="text" value="{$pwdarr[pwd_id].code}" /></td>
  </tr>
  <tr>
    <td width="25%" height="25" align="right" valign="middle" id="left">地址：</td>
    <td height="25" align="left" valign="middle" id="right"><input id="address" name="address" type="text" value="{$pwdarr[pwd_id].address}" />&nbsp;<font color="red">*</font></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input name="enter" type="submit" id="enter" value="修改" />&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" id="reset" value="重置" /></td>
  </tr>
</form>
</table>
{/section}
{/if}