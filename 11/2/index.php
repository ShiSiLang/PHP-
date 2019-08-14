<?php
date_default_timezone_set("Etc/GMT-8");
if(!isset($_COOKIE["visittime"])){					//检测cookie文件是否存在
 	setcookie("visittime",date("y-m-d H:i:s")); 	//不存在则进行设置
	echo "欢迎您第一次访问网站"."<br>";					//输出字符串
}else{												//如果存在
	setcookie("visittime",date("y-m-d H:i:s"),time()+60); //设置失效时间
    echo "上次访问网站的时间：".$_COOKIE["visittime"];	//输出上次访问网站的时间
	echo "<br>";										//输出回车符号
}
	echo "本次访问网站的时间： ".date("y-m-d H:i:s");	//输出当前的访问时间
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

