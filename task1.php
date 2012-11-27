<?php
class task1{
	private $_x=0;
	private $_y=0;
	private $_result=array();
	
	public function clear(){
		$this->_result=array();
		unset($this->_x, $this->_y);
	}
	
	public function setXY($x, $y){
		$this->clear();
		
		$this->_x=(int)$x;
		$this->_y=(int)$y;
	}
	
	public function execute(){
		for($i=$this->_x; $i<=$this->_y; $i++){
			if($this->FizzBuzz($i))
				array_push($this->_result, "FizzBuzz");
			elseif($this->Fizz($i))
				array_push($this->_result, "Fizz");
			elseif($this->Buzz($i))
				array_push($this->_result, "Buzz");
			else
				array_push($this->_result, $i);
		}
	}
	
	public function Fizz($n){
		return $n%3==0?true:false;
	}
	
	public function Buzz($n){
		return $n%5==0?true:false;
	}
	
	public function FizzBuzz($n){
		return $n%3==0 && $n%5==0?true:false;
	}
	
	public function getResult(){
		return implode(" ", $this->_result);
	}
}

/*
$task1=new task1();
$task1->setXY(1, 100);
$task1->execute();
echo $task1->getResult();
*/
?>