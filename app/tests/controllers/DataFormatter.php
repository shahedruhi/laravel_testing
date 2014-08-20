<?php
/**
 * Created by PhpStorm.
 * User: LAB
 * Date: 8/20/14
 * Time: 10:25 AM
 */

class DataFormatter {

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