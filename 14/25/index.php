<?php
class changecode{
	private $str;
	private $input;
	private $output;
	function __construct($input='',$output='gb2312'){
		$this->input = $input;
		$this->output = $output;
	}
	protected function chgcode($str){
		if($this->input != ''){
			$this->str = iconv($input,$output,$str);
		}else{
			$this->str = mb_convert_encoding($str,$output);
		}
	}
	function getStr($str){
		$this->chgcode($str);
		return $this->str;
	}
	function setInput($input){
		$this->input = $input;
	}
	function setOutput($output){
		$this->output = $output;
	}
	function getInput(){
		return $this->input;
	}
	function getOutput(){
		return $this->output;
	}
}
?>