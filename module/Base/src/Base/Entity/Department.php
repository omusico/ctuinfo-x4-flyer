<?php
namespace Base\Entity;

class Department{
	public $id;
	public $name;
	public $code;
	
	
	public function exchangeArray($data){

		foreach ($data as $field => $value) {
			$this->$field = (isset($value)) ? $value : null;
		}
		return true;
	}
	
	public function setCode($code){
		$this -> code = $code;
	}
	
	public function getCode(){
		return $this -> code;
	}
	
	public function setName($name){
		return $this -> name;
	}
	
	
	public function getName(){
		$this -> name = $name;
	}
}

