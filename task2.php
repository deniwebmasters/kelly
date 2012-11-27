<?php
class task2{
	private $_x=0;
	private $_y=0;
	private $_result=array();
	
	public function clear(){
		unset($this->_result, $this->_x, $this->_y);
	}
	
	public function setXY($x, $y){
		$this->clear();
		
		$this->_x=(int)$x;
		$this->_y=(int)$y;
	}
	
	function execute(){
		for($i=$this->_x;$i<=$this->_y;$i++){
			if($this->FizzBuzz($i))
				array_push($this->_result, "FizzBuzzBazz");
			elseif($this->Fizz($i))
				array_push($this->_result, "Fizz");
			elseif($this->Buzz($i))
				array_push($this->_result, "Buzz");
			elseif($this->Bazz($i))
				array_push($this->_result, "Bazz");
			else
				array_push($this->_result, $i);
		}
	}
	
	function Fizz($n){
		return $n%3==0?true:false;
	}
	
	function Buzz($n){
		return $n%5==0?true:false;
	}
	
	function Bazz($n){
		if($this->Fizz($n-1) && $this->Buzz($n-2) || $this->Fizz($n-2) && $this->Buzz($n-1))
			return true;
		else
			return false;
	}
	
	function FizzBuzz($n){
		return $n%3==0 && $n%5==0?true:false;
	}
	
	function getResult(){
		return implode(" ", $this->_result);
	}
}

$task2=new task2();
$task2->setXY(5, 100);
$task2->execute();
echo $task2->getResult();
?>