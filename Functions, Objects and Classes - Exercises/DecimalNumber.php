<?php

class DecimalNumber
{
    private $floatNumber;

    public function __construct($number)
    {
        $this->floatNumber = $number;
    }

    public function reverseIt() {
        return strrev($this->floatNumber);
    }
}