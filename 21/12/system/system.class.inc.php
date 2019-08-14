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
    
	//���췽��
    function ConnDB($dbtype,$host,$user,$pwd,$dbname,$debug=false){
		$this->dbtype=$dbtype;
    	$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->debug=$debug;
	}

    //ʵ�����ݿ�����Ӳ��������Ӷ���
    function GetConnId(){
    	
    	require("../adodb5/adodb.inc.php");
    	
    	if($this->dbtype=="mysql" || $this->dbtype=="mssql"){
    	    
    		if($this->dbtype=="mysql")
    		   $this->conn=NewADOConnection("mysql");
    		else 
    	       $this->conn=NewADOConnection("mssql");
    		
    	    $this->conn->Connect($this->host,$this->user,$this->pwd,$this->dbname);
    	
    	}elseif($this->dbtype=="access"){
    	    $this->conn=NewADOConnection("access");
    	    $this->conn->Connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=".$this->dbname.";Uid=".$this->user.";Pwd=".$this->pwd.";");
    	}
    	$this->conn->Execute("set names gb2312");
    	if($this->dbtype=="mysql")
    	    $this->conn->debug=$this->debug;
    	return $this->conn;
     	
    }	
    
    //�ر������ݿ������
    function CloseConnId(){
    	
    	$this->conn->Disconnect();
    }
    
}

//���ݿ������
class AdminDB{
	
	
	function ExecSQL($sqlstr,$conn){
		
		$sqltype=strtolower(substr(trim($sqlstr),0,6));
		$rs=$conn->Execute($sqlstr);
		if($sqltype=="select"){
			$array=$rs->GetRows();
			if(count($array)==0 || $rs==false)
				return false;
			else
				return $array;
			
		
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			
			if($rs)
			    return true;
			else 
			    return false;    
		}
	}
}
?>