<?php

class DateFormatter {

    protected $stamp;

    public function __construct(DateTime $stamp)
    {
        $this->stamp = $stamp;
    }

    public function getStamp()
    {
        return $this->stamp;
    }
}

class PracticeTest extends PHPUnit_Framework_TestCase {
    public function testHelloWorld()
    {
     $greeting = 'Hello, World.';

     $this->assertFalse($greeting === 'Hello, Worldg.', $greeting);

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

        $age =25;
        $this->assertInternalType('integer', $age); // true
    }

    /*public function testStampMustBeInstanceOfDateTime()
    {
        $date = new DateFormatter(new DateTime);
        $this->assertInstanceOf('DateTime', $date->getStamp()); // true
    }*/

}

