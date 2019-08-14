<?php
class IndexAction extends Action{
       public function index(){
		$middletype =M('middletype');			//实例化模型类
		
		$middledata=$middletype->where('highid=1')->select();//查询中级类别，高级类别为生活服务
		$this->assign('middledata',$middledata);				//将查询结果赋给模板变量
						
		$middletype=$middletype->limit('12,3')->select();		//查询中级类别
		$this->assign('middletype',$middletype);
				
		$com=M('common');
		
		$result=array();										//定义空数组
		for($i=0; $i<=count($middletype);$i++){					//循环输出查询结果中数据
			$search=$middletype[$i]['id'];						//获取中级类别的ID
			$lis=$com->where('middleid='.$search)->limit('0,7')->select();	//根据中级类别的ID进行查询
   			$result[]=$lis;										//将查询结果存储到数组中
		}
   		$this->assign('listdata',$result);				//输出中级类别数据

		$list=$com->select();							//查询数据
    	$this->assign('list',$list);					//将查询结果赋给模板变量
		
		$applieddata=$com->where('highid=5')->select();//查询中级类别，高级类别为实用工具
		$this->assign('applied',$applieddata);	
	 	$this->display('index');						//指定模板页
    }
	public function middle(){
	    $com=M('common');
		$middletype=M('middletype');
		$type=$_GET['link_id'];
		$middledata=$middletype->where('id='.$type)->select();
		$this->assign('middledata',$middledata);
		$comdata=$com->where('middleid='.$type)->select();
		$this->assign('com',$comdata);
		$this->display('middle');
	}
}
?>