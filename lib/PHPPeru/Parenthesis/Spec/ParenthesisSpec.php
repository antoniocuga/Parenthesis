<?php

namespace PHPPeru\Parenthesis;

use PHPPeru\Parenthesis\Parenthesis;

class DescribeParenthesis extends \PHPSpec\Context
{
    protected $parenthesis;
    protected $inputString;

    public function before()
    {
        $this->parenthesis = $this->spec(new Parenthesis());
    }

    public function itShouldMatchOpenParenthesis()
    {
        $this->inputString  = "(";
        $this->parenthesis->parse($this->inputString)->should->beFalse();
    }

    public function itShouldMatchOpenAndCloseParenthesis()
    {
        $this->inputString  = "()";
        $this->parenthesis->parse($this->inputString)->should->beTrue();
    }

    public function itShouldMatchOpenOpenAndCloseParenthesis()
    {
        $this->inputString  = "(()";
        $this->parenthesis->parse($this->inputString)->should->beFalse();
    }

    public function itShouldMatch2And3Parenthesis()
    {
        $this->inputString  = "(()))";
        $this->parenthesis->parse($this->inputString)->should->beFalse();
    }

    public function itShouldMatchxyYX()
    {
        $this->inputString  = "([])";
        $this->parenthesis->parse($this->inputString)->should->beTrue();
    }

    public function itShouldMatchxyXY()
    {
        $this->inputString  = "([)]";
        $this->parenthesis->parse($this->inputString)->should->beFalse();
    }

    public function itShouldMatchxyYyYXyYxX()
    {
        $this->inputString  = "([][])[]()";
        $this->parenthesis->parse($this->inputString)->should->beTrue();
    }

    public function itShouldMatchxyYyYXyYxXzZ()
    {
        $this->inputString  = "([][])[](){}";
        $this->parenthesis->parse($this->inputString)->should->beTrue();
    }
}
