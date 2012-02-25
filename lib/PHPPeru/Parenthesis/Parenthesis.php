<?php

namespace PHPPeru\Parenthesis;

class Parenthesis
{
    protected $inputString;

    public function __construct($inputString)
    {
        $this->inputString = $inputString;
    }

    public function parse()
    {
        return false;
    }
}
