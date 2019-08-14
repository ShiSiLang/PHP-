<?php
class MoreAction extends Action{
    public function index(){
		$type=$_GET['link_id'];				//��ȡ�������Ӵ��ݵ�IDֵ
		$ele=M('elementarytype');			//ʵ����ģ����
		$eledata=$ele->where('middleid='.$type)->select();	//���ݳ������Ӵ��ݵ�IDִֵ�в�ѯ���
		$com=M('common');					//ʵ����ģ����
		$result=array();					//����������
		for($i=0; $i<=count($eledata);$i++){				//ѭ����ȡ��������е�����
			$search=$eledata[$i]['id'];						//��ȡ��������ID
			$result[]=$eledata[$i]['ChineseName'];			//�������������ƴ洢��������
			$lis=$com->where('elementaryid='.$search)->select();	//���ݳ�������ID����common���в�ѯ������
   			$result[]=$lis;									//����ѯ����洢��������
		}
   		$this->assign('listdata',$result);					//�����鸳��ģ�����
        $this->display('index');							//ָ��ģ��ҳ
    }
	public function clime(){
		$type=$_GET['link_id'];				//��ȡ�������Ӵ��ݵ�IDֵ
		$high=M('common');			//ʵ����ģ����
		$highdata=$high->where('highid='.$type)->select();	//���ݳ������Ӵ��ݵ�IDִֵ�в�ѯ���
   		$this->assign('listdata',$highdata);					//�����鸳��ģ�����
        $this->display('clime');							//ָ��ģ��ҳ
    }
	public function city(){
		$type=$_GET['link_id'];				//��ȡ�������Ӵ��ݵ�IDֵ
		$ele=M('elementarytype');			//ʵ����ģ����
		$eledata=$ele->where('middleid='.$type)->select();	//���ݳ������Ӵ��ݵ�IDִֵ�в�ѯ���
		$com=M('common');					//ʵ����ģ����
		$result=array();					//����������
		for($i=0; $i<=count($eledata);$i++){				//ѭ����ȡ��������е�����
			$search=$eledata[$i]['id'];						//��ȡ��������ID
			$result[]=$eledata[$i]['ChineseName'];			//�������������ƴ洢��������
			$lis=$com->where('elementaryid='.$search)->select();	//���ݳ�������ID����common���в�ѯ������
   			$result[]=$lis;									//����ѯ����洢��������
		}
   		$this->assign('listdata',$result);					//�����鸳��ģ�����
        $this->display('city');							//ָ��ģ��ҳ
    }
}
?>