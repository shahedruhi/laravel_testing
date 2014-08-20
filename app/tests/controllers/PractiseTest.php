<?php

class PracticeTest extends PHPUnit_Framework_TestCase {
    public function testHelloWorld()
    {
     $greeting = 'Hello, World.';

     $this->assertEquals('Hello, World.', $greeting);

     $val = 0;
     $this->assertSame(0, $val);

    }

    public function testLaravelDevsIncludesDayle()
    {
    $names = ['Taylor', 'Shawn', 'Dayle'];
    $this->assertNotContains('Troll', $names);
    }
}

