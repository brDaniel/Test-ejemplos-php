<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;
class FizzBuzzTest extends TestCase{

    public function usesCases(){

	return [
	    [3, "Fizz"],
	    [5, "Buzz"],
	    [15, "FizzBuzz"],
	    [1, "1"],
	];
    }

    /**
     * @test
     * @covers \FizzBuzz::sayANumber
     *@dataProvider usesCases
     **/

    public function testFizzBuzz($numberToTest, $expectedResult): void
    {
	$fizzBuzz = new FizzBuzz();
	$result = $fizzBuzz->sayANumber($numberToTest);

	$this->assertEquals($expectedResult, $result);

    }
}
?>
