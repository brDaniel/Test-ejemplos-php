<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase{

    private $fizzBuzz;

    public function setUp():void
    {
	$this->fizzBuzz = new FizzBuzz();
    }
    
    public function usesCases(): Array{

	return [
	    [3, "Fizz"],
	    [5, "Buzz"],
	    [15, "FizzBuzz"],
	    [1, "1"],
	];
    }

    /**
     * @test
     * @covers App\FizzBuzz::sayANumber
     * @dataProvider usesCases
     **/

    public function testFizzBuzz($numberToTest, $expectedResult): void
    {
	$result = $this->fizzBuzz->sayANumber($numberToTest);

	$this->assertEquals($expectedResult, $result);

    }

    /**
     * @test
     * @covers App\FizzBuzz::giveMeTheCheck
     * */
    public function testCheckIsZeroIfNothingSayANumber(): void
    {


	$this->assertEquals(0,$this->fizzBuzz->giveMeTheCheck());
    }
     /**
     * @test
     * @covers App\FizzBuzz::giveMeTheCheck
     * @covers App\FizzBuzz::sayANumber
     * */

    public function testTheCheckIncrementWhenSayANumber(): void
    {

	$this->fizzBuzz->sayANumber(1);
	$this->fizzBuzz->sayANumber(3);

	$this->assertEquals(2,$this->fizzBuzz->giveMeTheCheck());
	
    }

}
?>
