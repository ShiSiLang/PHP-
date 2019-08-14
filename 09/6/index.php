<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>break语句</title>
</head>
<body>
<script language="javascript" >
for( i=0;i<20;i++ ){		//在for语句中初始化循环变量，定义循环条件，定义之后每次累加1
	if(i>10){
		break;  			//当i>10时立即跳出循环
	}
	document.write(i+"-");	//输出i的值
}
</script>
</body>
</html>
