<?php

namespace Pondit;

class Calculator
{
    public $number1;
    public $number2;
    // wow
    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    function add()
    {
        return $this->number1 + $this->number2;
    }
}