<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\helloWorld;

class helloWorldTest extends TestCase{
    
    
    public function testSayHello()
    {
	$hello = new helloWorld();
	$this->assertEquals('Hello, World!',$hello->sayHello());
    }	


}
?>
