<?php
setcookie("TMCookie",'www.mrbccd.com');
setcookie("TMCookie", 'www.mrbccd.com', time()+60);//设置Cookie的有效时间为60秒
//设置有效时间为60秒，有效目录为 /tm/。有效域名为mrbccd.com及其子域名
setcookie("TMCookie", 'www.mrbccd.com', time()+3600, "/tm/",". mrbccd.com", 1); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

