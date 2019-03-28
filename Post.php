<?php 
class Post{

	private $name;
	private $prise;
	public function setName($name){
		$this->name =$name;
	}
	public function setPrise($prise){
		$this->prise =$prise;
	}
	public function  getName(){
		return $this->name;
	}public function getPrise(){
		return $this->prise;
	}
}

?>