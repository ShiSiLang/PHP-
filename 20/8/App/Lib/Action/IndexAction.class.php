<?php
header("Content-Type:text/html; charset=utf-8");		//设置页面编码格式
class IndexAction extends Action{
	public function index(){
		$db = M('User');							// 实例化模型类,参数数据表名称，不包含前缀
		$select = $db->where('user="mr"')->order('id desc')->limit(3)->select();	//执行查询语句
		$this->assign('select',$select); 				// 模板变量赋值
		$this->display(); 							// 指定模板页
	}
	public function insert(){
		$dba = M('User');							// 实例化模型类,参数数据表名称，不包含前缀
		$data['user'] = 'mr';
		$data['pass'] = md5('mrsoft');
		$data['address'] = '长春市';
		$result=$dba->add($data);					//执行添加数据
		if($result){
			$this->redirect('Index/index','', 2,'页面跳转中');		//页面重定向	
		}
	}
}
?>