<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Operations;

class OperationsTest extends TestCase
{
    private $op;

    public function setUp():void
    {
        $this->op = new Operations();
    }

    
    /**
     *@test 
     *@covers App\Operations::addition
     */
    public function testSumWithTwoValues():void
    {   
        $this->assertEquals(7, $this->op->addition(2,5));
    }

    /**
     *@test 
     *@covers App\Operations::addition
     */
    public function testSumWithNullValues():void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->op->addition(NULL,NULL);
    }
    /**
     *@test 
     *@covers App\Operations::addition
     */
    public function testSumWithNoNumericValues():void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->op->addition("Hello","4");
    }
  /**
     *@test 
     *@covers App\Operations::division
     */
    public function testDivisionWithTwoValues():void
    {   
        $this->assertEquals(1, $this->op->division(5,5));
    }

    /**
     *@test 
     *@covers App\Operations::division
     */
    public function testDivisionWithNullValues():void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->op->division(NULL,NULL);
    }
    /**
     *@test 
     *@covers App\Operations::division
     */
    public function testDivisionWithNoNumericValues():void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->op->division("Hello","4");
    } 
    /**
     *@test 
     *@covers App\Operations::division
     */
    public function testDivisionBetwenZero():void
    {
        $this->expectException(\DivisionByZeroError::class);
        $this->op->division(5,0);
    } 
    
    
}

?>
