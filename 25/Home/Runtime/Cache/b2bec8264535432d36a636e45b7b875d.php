<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>城市信息</title><STYLE type=text/css>TD {
	FONT-SIZE: 15px; FONT-FAMILY: arial,sans-serif,宋体
}
BODY {
	FONT-SIZE: 15px; FONT-FAMILY: arial,sans-serif,宋体
}
BODY {
	MARGIN-TOP: 0px; MARGIN-LEFT: 0px; MARGIN-RIGHT: 0px; BACKGROUND-COLOR: #fcfff7
}
A:link {
	PADDING-LEFT: 4px; COLOR: #000000; TEXT-DECORATION: none
}
A:visited {
	PADDING-LEFT: 4px; COLOR: #000000; TEXT-DECORATION: none
}
A:active {
	PADDING-LEFT: 4px; COLOR: green; TEXT-DECORATION: none
}
A:hover {
	PADDING-LEFT: 4px; COLOR: red; TEXT-DECORATION: underline
}
A.m:link {
	PADDING-LEFT: 0px; COLOR: #000000; TEXT-DECORATION: none
}
A.m:visited {
	PADDING-LEFT: 0px; COLOR: #000000; TEXT-DECORATION: none
}
A.m:active {
	PADDING-LEFT: 0px; COLOR: green; TEXT-DECORATION: none
}
A.m:hover {
	PADDING-LEFT: 0px; COLOR: red; TEXT-DECORATION: underline
}
.bgg {
	BORDER-RIGHT: #8ab78a 1px solid; BORDER-TOP: #8ab78a 1px solid; BACKGROUND: #d9edda; BORDER-LEFT: #8ab78a 1px solid; WIDTH: 766px; BORDER-BOTTOM: #8ab78a 1px solid
}
.bgg TABLE {
	MARGIN: 5px
}
.zb TABLE {
	MARGIN: 0px 5px
}
.zbfont {
	COLOR: #2e6d4a; TEXT-ALIGN: center
}
.zbfont A:link {
	COLOR: #2e6d4a
}
.zbfont A:visited {
	COLOR: #2e6d4a
}
.zbfont A:hover {
	COLOR: red
}
.f9pt {
	FONT-SIZE: 12px
}
.f14 {
	FONT-SIZE: 15px
}
#sfont A {
	FONT-SIZE: 13px
}
#sfont B {
	FONT-SIZE: 13px
}
.t1 {
	BORDER-RIGHT: 1px solid; BORDER-TOP: 1px solid; FONT-SIZE: 12px; BORDER-LEFT: 1px solid; BORDER-BOTTOM: 1px solid; TEXT-ALIGN: center
}
.bgg2 {
	BORDER-RIGHT: #8ab78a 1px solid; BORDER-TOP: #8ab78a 1px solid; BACKGROUND: #d9edda; BORDER-LEFT: #8ab78a 1px solid; WIDTH: 776px; BORDER-BOTTOM: #8ab78a 1px solid
}
.WB {
	CLEAR: both; WIDTH: 530px; PADDING-TOP: 5px; HEIGHT: 52px; TEXT-ALIGN: left
}

@media Unknown    
{
.WB {
	MARGIN-TOP: 3px! important; PADDING-TOP: 0px! important
}
    }
#FrP {
	BORDER-RIGHT: #c5d5c5 0px solid; BORDER-TOP: #c5d5c5 0px solid; FONT-SIZE: 13px; PADDING-BOTTOM: 2px; BORDER-LEFT: #c5d5c5 0px solid; WIDTH: 530px; PADDING-TOP: 1px; BORDER-BOTTOM: #c5d5c5 0px solid; HEIGHT: 48px
}
UNKNOWN {
	COLOR: #205001
}
#FrP A:hover {
	COLOR: red
}
.searchfod1 {
	FONT-WEIGHT: bold; FONT-SIZE: 14px; WIDTH: 55px; COLOR: #000; TEXT-ALIGN: center
}
.searchfod2 {
	FONT-SIZE: 14px; WIDTH: 55px; CURSOR: pointer; TEXT-ALIGN: center
}
</STYLE><META content="MSHTML 6.00.2900.5897" name=GENERATOR></HEAD><BODY><DIV align=center><CENTER><table id="__01" height="80" border="0" cellpadding="0" cellspacing="0" align="center"><tr><td><img src="__ROOT__/Public/images/log.jpg" width="374" height="80" alt=""></td><td width="70" background="__ROOT__/Public/images/log_02.jpg"></td><td><img src="__ROOT__/Public/images/log_03.jpg" width="343" height="80" alt=""></td></tr></table></CENTER></DIV><DIV align=center><CENTER><TABLE height=1 cellSpacing=0 cellPadding=0 width=778 border=0><TBODY><TR align=middle><TD bgColor=#c1d0d7 height=1></TD></TR></TBODY></TABLE><TABLE height=25 cellSpacing=0 width=778 bgColor=#eef7ff border=0 
cellspadding="2"><TBODY><TR><TD class=f9pt style="COLOR: #424242" width="30%"><IMG src="__ROOT__/Public/images/home.gif" align=absMiddle border=0>&nbsp;&nbsp;明日导航</TD><TD class=f9pt style="PADDING-RIGHT: 10px; COLOR: #424242" align=right><A 
      style="COLOR: #424242" href="http://www.mingribook.com/" target=_self>首页</A>      &gt; <A style="COLOR: #424242" 
      href="__APP__/More/clime?link_id=3">生活服务</A> &gt; 
  		<?php if(is_array($middledata)): $i = 0; $__LIST__ = $middledata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mdata): $mod = ($i % 2 );++$i; echo ($mdata["ChineseName"]); endforeach; endif; else: echo "" ;endif; ?></TD></TR></TBODY></TABLE></CENTER></DIV><DIV align=center><CENTER><DIV class=bgg><TABLE cellSpacing=1 cellPadding=5 width="100%" border=0><!--无内容--><!--无内容--><!--无内容--><!--无内容--><!--无内容--><!--无内容--><!--无内容--><!--无内容--><!--无内容--><TR><?php if(is_array($middledata)): $i = 0; $__LIST__ = $middledata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mdata): $mod = ($i % 2 );++$i;?><TD width="10%" class="zbfont">&nbsp;<?php echo ($mdata["ChineseName"]); ?></TD><?php endforeach; endif; else: echo "" ;endif; ?><td width="90%"><table cellpadding="5" cellspacing="1" border="0"><tr><?php if(is_array($com)): $m = 0; $__LIST__ = $com;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grand): $mod = ($m % 2 );++$m; if(in_array(($m), explode(',',"5,10,15,20,25,30,35,40,45"))): ?><TD width="20%"><A href="<?php echo ($grand["href"]); ?>"><?php echo ($grand["title"]); ?></A></TD></TR><TR><?php else: ?><TD width="15%">&nbsp;<A href="<?php echo ($grand["href"]); ?>"><?php echo ($grand["title"]); ?></A></TD><?php endif; endforeach; endif; else: echo "" ;endif; ?><TD width="20%" colspan="5">&nbsp;</TD></TR></table></td></tr></TABLE></DIV></CENTER></DIV><BR><DIV align=center><BR><A href="http://www.mingribook.com/" target=_self><IMG 
height=30 alt=返回本站首页 src="__ROOT__/Public/images/return.gif" width=60 
border=0></A></DIV></BODY></HTML>