<?php
header("Content-Type:text/html; charset=utf-8");	//设置页面编码格式
class IndexAction extends Action{
	public function index(){
		$db = M('User');						// 实例化模型类,参数数据表名称，不包含前缀
		$select = $db->select(); 					// 查询数据
		$this->assign('select',$select); 			// 模板变量赋值
		$this->display(); 						// 指定模板页
	}
	public function type(){
		$dba = M('Type');						// 实例化模型类,参数数据表名称，不包含前缀
		$select = $dba->select(); 				// 查询数据
		$this->assign('select',$select); 			// 模板变量赋值
		$this->display('type'); 					// 指定模板页
	}
}
?>
