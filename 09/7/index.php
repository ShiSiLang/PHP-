<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>continue语句</title>
</head>

<body>
<script language="javascript">
	var str="20以内的偶数有";	//定义变量str
	var i=1;				  //定义变量i
	while(i<20){			  //使用while语句，i<10
	   if(i%2!=0){			  //如果变量i能够被2整除，则执行下面的语句
			i++;			  //进行累加
			continue;		  //调用continue语句
		}
		str=str+i+" ";		  //拼接字符串str，获取i的值
		i++;				  //使变量i的值加1
	}
	document.write(str);	  //输出变量str的值
</script>
</body>
</html>
