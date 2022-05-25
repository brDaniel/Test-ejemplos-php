<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;
class FizzBuzzTest extends TestCase{

    
    public function testReturnFizzWhenTheNumberIsThree(): void{

	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->sayANumber(3);

	$this->assertEquals('Fizz',$result);

    }

    public function testReturnBuzzWhenTheNumberIsFive(): void{

	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->sayANumber(5);

	$this->assertEquals('Buzz',$result);


    }

    public function testReturnFizzBuzzWhenTheNumberFifteen(): void{

	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->sayANumber(15);

	$this->assertEquals('FizzBuzz',$result);


    }
    
    public function testReturnTheNumberWhenTheNumberOne(): void{

	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->sayANumber(1);
	

	$this->assertEquals(1,$result);

    }
}
?>
