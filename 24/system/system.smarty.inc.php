<?php
require("libs/Smarty.class.php");			//包含模板文件

class SmartyProject extends  Smarty{		//定义类，继承模板类
	
	function SmartyProject(){				//定义方法
		$this->template_dir = "./system/templates/";			//指定模板文件存储位置
		$this->compile_dir = "./system/templates_c/";	//指定编译文件存储位置
		$this->config_dir = "./system/configs/";			//指定配置文件存储位置
		$this->cache_dir = "./system/cache/"; 			//指定缓存文件存储位置
    }
} 

?>