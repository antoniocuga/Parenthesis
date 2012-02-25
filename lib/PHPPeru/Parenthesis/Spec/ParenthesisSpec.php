<?php

namespace PHPPeru\Parenthesis;

use PHPPeru\Parenthesis\Parenthesis;
use \Mockery as m;

class DescribeParenthesis extends \PHPSpec\Context
{
    protected $parenthesis;
    protected $inputString  = "(";

    public function before()
    {
        $this->parenthesis = $this->spec(new Parenthesis($this->inputString));
    }

    public function itShouldMatchOpenParenthesis()
    {
        $this->parenthesis->parse()->should->beFalse();
    }
}
