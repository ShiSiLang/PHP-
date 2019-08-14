<?php
//���ݿ�������
class ConnDB{
	var $dbtype;
	var $host;
    	var $user;
    	var $pwd;
    	var $dbname;
    	var $debug;
    	var $conn;    
    function ConnDB($dbtype,$host,$user,$pwd,$dbname,$debug=false){	//���췽����Ϊ��Ա������ֵ
		$this->dbtype=$dbtype;
    		$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->debug=$debug;
	}
    function GetConnId(){		    							//ʵ���벻ͬ���ݿ�����Ӳ��������Ӷ���
  	require("../adodb5/adodb.inc.php");						//����ADODB����ļ�
    		if($this->dbtype=="mysql" || $this->dbtype=="mssql"){		//�жϳ�Ա�������ݵ����ݿ�����
    			if($this->dbtype=="mysql")						//�ж������MySQL���ݿ�
    		   		$this->conn=NewADOConnection("mysql");		//ִ����MySQl���ݿ������
    			else 
    	       		$this->conn=NewADOConnection("mssql");
    	    		$this->conn->Connect($this->host,$this->user,$this->pwd,$this->dbname);	//���ݿ����ӵ��û�������
		}elseif($this->dbtype=="access"){						//�ж����ʹ�õ���Access���ݿ�
    	    		$this->conn=NewADOConnection("access");
    	    		$this->conn->Connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=".$this->dbname.";Uid=".$this->user.";Pwd=".$this->pwd.";");	//ִ������Access���ݿ�
    		}
    		$this->conn->Execute("set names gb2312");				//�������ݿ�ı����ʽ
    		if($this->dbtype=="mysql")
    	    		$this->conn->debug=$this->debug;
    		return $this->conn;								//�������Ӷ���
    }
	function CloseConnId(){								//����ر����ݿ�ķ���
    		$this->conn->Disconnect();							//ִ�йرյĲ���
    }
}	

//���ݿ������
class AdminDB{
	function ExecSQL($sqlstr,$conn){					//���巽��������ΪSQl�����������ݿⷵ�صĶ���
		$sqltype=strtolower(substr(trim($sqlstr),0,6));	//��ȡSQL�е�ǰ6���ַ�������ת����Сд
		$rs=$conn->Execute($sqlstr);					//ִ��SQL���
		if($sqltype=="select"){						//�ж����SQL��������ΪSELECT
			$array=$rs->GetRows();				//ִ�и���䣬��ȡ��ѯ���
			if(count($array)==0 || $rs==false)			//�ж�����Ƿ�ִ�гɹ�
				return false;					//�����ѯ���Ϊ0������ִ��ʧ�ܣ��򷵻�false
			else
				return $array;					//���򷵻ز�ѯ���������
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			//�ж����SQL������Ͳ�Ϊselect����ִ�����²���
			if($rs)
			    return true;						//ִ�гɹ�����true
			else 
			    return false;    					//�Ƿ񷵻�false
		}
	}
}


//��ҳ��
class SepPage{
	var $rs;
	var $pagesize;
	var $nowpage;
	var $array;
	var $conn;
	var $sqlstr;
	function ShowDate($sqlstr,$conn,$pagesize,$nowpage){	//���巽��
		if(!isset($nowpage) || $nowpage=="")			//�жϱ���ֵ�Ƿ�Ϊ��
			$this->nowpage=10;						//����ÿҳ����ļ�¼��
		else
			$this->nowpage=$nowpage;
		$this->pagesize=$pagesize;					//����ÿҳ����ļ�¼��
		$this->conn=$conn;							//�������ݿⷵ�صı�ʶ
		$this->sqlstr=$sqlstr;							//ִ�еĲ�ѯ���
		$this->rs=$this->conn->PageExecute($this->sqlstr,$this->pagesize,$this->nowpage);
		@$this->array=$this->rs->GetRows();			//��ȡ��¼��
			if(count($this->array)==0 || $this->rs==false)
				return false;
			else
				return $this->array;
	}
	function ShowPage($contentname,$utits,$anothersearchstr,$class){
		$allrs=$this->conn->Execute($this->sqlstr);		//ִ�в�ѯ���
		$record=count($allrs->GetRows());				//ͳ�Ƽ�¼����
		$pagecount=ceil($record/$this->pagesize);		//���㹲�м�ҳ
		$str="";
		$str.="����".$contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;ÿҳ��ʾ&nbsp;".$this->pagesize."&nbsp;".$utits."&nbsp;��&nbsp;".$this->rs->AbsolutePage()."&nbsp;ҳ/��&nbsp;".$pagecount."&nbsp;ҳ";
		$str.="&nbsp;&nbsp;&nbsp;&nbsp;";
		if(!$this->rs->AtFirstPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=1".$anothersearchstr." class=".$class.">��ҳ</a>";
		else
			$str.="<font color='#555555'>��ҳ</font>";
		$str.="&nbsp;";
		if(!$this->rs->AtFirstPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->rs->AbsolutePage()-1).$anothersearchstr." class=".$class.">��һҳ</a>";
		else
			$str.="<font color='#555555'>��һҳ</font>";
		$str.="&nbsp;";	
		if(!$this->rs->AtLastPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->rs->AbsolutePage()+1).$anothersearchstr." class=".$class.">��һҳ</a>";
		else
			$str.="<font color='#555555'>��һҳ</font>";	
		$str.="&nbsp;";
		if(!$this->rs->AtLastPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount.$anothersearchstr." class=".$class.">βҳ</a>";
		else
			$str.="<font color='#555555'>βҳ</font>";
		if(count($this->array)==0 || $this->rs==false)			
			return "";
		else
		    return $str;	
	}
}


//ϵͳ���÷���
class UseFun{
	
	function UnHtml($text){
	   $content=(nl2br(htmlspecialchars($text)));
	   $content=str_replace("[strong]","<strong>",$content);
	   $content=str_replace("[/strong]","</strong>",$content);
	   $content=str_replace("[em]","<em>",$content);
	   $content=str_replace("[/em]","</em>",$content);
	   $content=str_replace("[u]","<u>",$content);
	   $content=str_replace("[/u]","</u>",$content);
	
	
	   $content=str_replace("[font color=#FF0000]","<font color=#FF0000>",$content);
	   $content=str_replace("[font color=#00FF00]","<font color=#00FF00>",$content);
	   $content=str_replace("[font color=#0000FF]","<font color=#0000FF>",$content);
	
	   $content=str_replace("[font face=����_GB2312]","<font face=����_GB2312>",$content);
	   $content=str_replace("[font face=����]","<font face=������>",$content);
	   $content=str_replace("[font face=����]","<font face=����>",$content);
       $content=str_replace("[/font]","</font>",$content);
	   //$content=str_replace(chr(32)," ",$content);
	   $content=str_replace("[font size=1]","<font size=1>",$content);
	   $content=str_replace("[font size=2]","<font size=2>",$content);
	   $content=str_replace("[font size=3]","<font size=3>",$content);
	   $content=str_replace("[font size=4]","<font size=4>",$content);
       $content=str_replace("[font size=5]","<font size=5>",$content);
	   $content=str_replace("[font size=6]","<font size=6>",$content);
	   
	   $content=str_replace("[FIELDSET][LEGEND]","<FIELDSET><LEGEND>",$content);
	   $content=str_replace("[/LEGEND]","</LEGEND>",$content);
	   $content=str_replace("[/FIELDSET]","</FIELDSET>",$content);
	   return $content;
	}
	
}

?>