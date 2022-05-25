<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\helloWorld;

class helloWorldTest extends TestCase{
    
    /**
     *@test 
     *@covers /helloWorld::sayHello
     */

    public function testSayHello()
    {
	$hello = new helloWorld();
	$this->assertEquals('Hello, World!',$hello->sayHello());
    }	


}
?>
