<?php
require("../Smarty/Smarty.class.php");

class SmartyProject extends  Smarty{		//�����࣬�̳�Smarty����
	function SmartyProject(){			//���巽��������Smartyģ��
		$this->template_dir = "./";		//ָ��ģ���ļ��洢�ڸ�Ŀ¼��
		$this->compile_dir = "../Smarty/templates_c/11/";	//ָ�������ļ��洢��system/Smarty/templates_c/�ļ�����
		$this->config_dir = "../Smarty/configs/";
		$this->cache_dir = "../Smarty/cache/"; 
    }

} 

?>