<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\helloWorld;

class helloWorldTest extends TestCase{
    
    private $hello;
    public function setUp():void
    {
        $this->hello = new helloWorld();
    }
    /**
     *@test 
     *@covers App\helloWorld::sayHello
     */

    public function testSayHello():void
    {
        $this->assertEquals('Hello, World!',$this->hello->sayHello());
    }	


}
?>
