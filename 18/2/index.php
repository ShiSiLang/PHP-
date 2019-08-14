<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$host = "127.0.0.1";								//MySQL服务器地址
$userName = "root";									//用户名
$password = "123456";								//密码
$dbName = "blog";							//数据库名称
$connID = mysqli_connect($host, $userName, $password);	//建立与MySQL数据库服务器的连接
if(mysqli_select_db($connID, $dbName)){					//选择数据库
    echo "数据库选择成功！";
}else{
    echo "数据库选择失败！";
}
?>
