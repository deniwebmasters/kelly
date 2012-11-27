<?php
require_once("PHPUnit/Autoload.php");
require_once("task1.php");

class Task1Test extends PHPUnit_Framework_TestCase
{
    var $_task1;
	
	public function setUp(){
		$this->_task1=new task1();
	}
	
	public function tearDown(){
		unset($this->_task1);
	}
	
	public function testFizz3(){
		$this->assertTrue($this->_task1->Fizz(3));
	}
	public function testFizz5(){
		$this->assertFalse($this->_task1->Fizz(5));
	}
	public function testFizz15(){
		$this->assertTrue($this->_task1->Fizz(15));
	}
	
	public function testBuzz3(){
		$this->assertFalse($this->_task1->Buzz(3));
	}
	public function testBuzz5(){
		$this->assertTrue($this->_task1->Buzz(5));
	}
	public function testBuzz15(){
		$this->assertTrue($this->_task1->Buzz(15));
	}
	
	public function testFizzBuzz3(){
		$this->assertFalse($this->_task1->FizzBuzz(3));
	}
	public function testFizzBuzz5(){
		$this->assertFalse($this->_task1->FizzBuzz(5));
	}
	public function testFizzBuzz15(){
		$this->assertTrue($this->_task1->FizzBuzz(15));
	}
	
	public function testResult_3_to_5(){
		$expected="Fizz 4 Buzz";
		$this->_task1->setXY(3, 5);
		$this->_task1->execute();
		$this->assertEquals($expected, $this->_task1->getResult());
	}
	public function testResult_5_to_10(){
		$expected="Buzz Fizz 7 8 Fizz Buzz";
		$this->_task1->setXY(5, 10);
		$this->_task1->execute();
		$this->assertEquals($expected, $this->_task1->getResult());
	}
	public function testResult_11_to_16(){
		$expected="11 Fizz 13 14 FizzBuzz 16";
		$this->_task1->setXY(11, 16);
		$this->_task1->execute();
		$this->assertEquals($expected, $this->_task1->getResult());
	}
}
?>
