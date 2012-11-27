<?php
class task2{
	var $result=array();
	
	function __construct($x, $y){
		$x=(int)$x;
		$y=(int)$y;
		
		for($i=$x;$i<=$y;$i++){
			if($this->FizzBuzz($i))
				array_push($this->result, "FizzBuzzBazz");
			elseif($this->Fizz($i))
				array_push($this->result, "Fizz");
			elseif($this->Buzz($i))
				array_push($this->result, "Buzz");
			elseif($this->Bazz($i))
				array_push($this->result, "Bazz");
			else
				array_push($this->result, $i);
		}
		
	}
	
	function Fizz($n){
		return $n%3==0?true:false;
	}
	
	function Buzz($n){
		return $n%5==0?true:false;
	}
	
	function Bazz($n){
		if(end($this->result)=='Fizz' && prev($this->result)=='Buzz' || end($this->result)=='Buzz' && prev($this->result)=='Fizz')
			return true;
		else
			return false;
	}
	
	function FizzBuzz($n){
		return $n%3==0 && $n%5==0?true:false;
	}
	
	function getResult(){
		return implode(" ", $this->result);
	}
}

$fb=new task2(5, 100);
echo $fb->getResult();
?>