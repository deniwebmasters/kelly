<?php
require_once("PHPUnit/Autoload.php");
require_once("task2.php");

class task2Test extends PHPUnit_Framework_TestCase
{
    var $_task2;
	
	public function setUp(){
		$this->_task2=new task2();
	}
	
	public function tearDown(){
		unset($this->_task2);
	}
	
	public function testFizz3(){
		$this->assertTrue($this->_task2->Fizz(3));
	}
	public function testFizz5(){
		$this->assertFalse($this->_task2->Fizz(5));
	}
	public function testFizz15(){
		$this->assertTrue($this->_task2->Fizz(15));
	}
	
	public function testBuzz3(){
		$this->assertFalse($this->_task2->Buzz(3));
	}
	public function testBuzz5(){
		$this->assertTrue($this->_task2->Buzz(5));
	}
	public function testBuzz15(){
		$this->assertTrue($this->_task2->Buzz(15));
	}
	
	public function testFizzBuzz3(){
		$this->assertFalse($this->_task2->FizzBuzz(3));
	}
	public function testFizzBuzz5(){
		$this->assertFalse($this->_task2->FizzBuzz(5));
	}
	public function testFizzBuzz15(){
		$this->assertTrue($this->_task2->FizzBuzz(15));
	}
	
	public function testBazz7(){
		$this->assertTrue($this->_task2->Bazz(7));
	}
	public function testBazz11(){
		$this->assertTrue($this->_task2->Bazz(11));
	}
	public function testBazz17(){
		$this->assertFalse($this->_task2->Bazz(17));
	}
	
	public function testResult_1_to_5(){
		$expected="Bazz 2 Fizz 4 Buzz";
		$this->_task2->setXY(1, 5);
		$this->_task2->execute();
		$this->assertEquals($expected, $this->_task2->getResult());
	}
	public function testResult_5_to_10(){
		$expected="Buzz Fizz Bazz 8 Fizz Buzz";
		$this->_task2->setXY(5, 10);
		$this->_task2->execute();
		$this->assertEquals($expected, $this->_task2->getResult());
	}
	public function testResult_11_to_16(){
		$expected="Bazz Fizz 13 14 FizzBuzz Bazz";
		$this->_task2->setXY(11, 16);
		$this->_task2->execute();
		$this->assertEquals($expected, $this->_task2->getResult());
	}
}
?>
