<?php
class SportObject{
	private $cont;
	public function __construct($cont){
		$this -> cont = $cont;
	}
	public function __toString(){
		return $this -> cont;
	}
}
?>