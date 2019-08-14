<?php
require("../Smarty/Smarty.class.php");		//调用Smarty文件
class SmartyProject extends  Smarty{	//定义类，继承Smarty父类
	function SmartyProject(){			//定义方法，配置Smarty模板
		$this->template_dir = "./";		//指定模板文件存储在根目录下
		$this->compile_dir = "../Smarty/templates_c/13/";	//指定编译文件存储在system/Smarty/templates_c/文件夹下
		$this->config_dir = "../Smarty/configs/";
		$this->cache_dir = "../Smarty/cache/"; 
    }
} 

?>