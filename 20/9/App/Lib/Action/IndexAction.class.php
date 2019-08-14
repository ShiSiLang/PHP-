<?php
header("Content-Type:text/html; charset=utf-8");	//设置页面编码格式
class IndexAction extends Action{
	public function index(){
		$db = M('User');							// 实例化模型类,参数数据表名称，不包含前缀
		$select = $db->order('id desc')->limit(10)->select();
		$this->assign('select',$select); 			// 模板变量赋值
		$this->display(); 							// 指定模板页
	}
	public function update(){
		$db = M('User');							// 实例化模型类,参数数据表名称，不包含前缀
		$select = $db->where('id='.$_GET['id'])->select();
		$this->assign('select',$select); 			// 模板变量赋值
		$this->display(update); 							// 指定模板页
		if(isset($_POST['id'])){
			$data['user'] = $_POST['user'];				// 要修改的数据对象属性赋值
			$data['pass'] = md5($_POST['pass']);
			$data['address'] = $_POST['address'];			
			$result=$db->where('id='.$_POST['id'])->save($data); 		// 根据条件保存修改的数据
			if($result){
				$this->redirect('Index/index','', 2,'数据更新成功');		//页面重定向	
			}
		}
		
	}
	public function delete(){
		$db = M('User');							// 实例化模型类,参数数据表名称，不包含前缀
		$result=$db->where('id='.$_GET['id'])->delete(); 		// 删除id为5的用户数据
		if($result){
			$this->redirect('Index/index','', 2,'数据删除成功');		//页面重定向	
		}
	}
}
?>