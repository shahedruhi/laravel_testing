<?php
/**
 * Created by PhpStorm.
 * User: LAB
 * Date: 8/20/14
 * Time: 10:26 AM
 */
    public function testStampMustBeInstanceOfDateTime()
    {
        $date = new DateFormatter(new DateTime);
        $this->assertInstanceOf('DateTime', $date->getStamp()); // true
    }