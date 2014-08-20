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

    public function testFamilyRequiresParent()
    {
        $family = [
            'parents' => 'Joe',
            'children' => ['Timmy', 'Suzy']
        ];

        $this->assertArrayHasKey('parents', $family); // true
        $this->assertInternalType('string', $family['parents']); // false

        $age = 25;
        $this->assertInternalType('integer', $age); // true
    }



}

