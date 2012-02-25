<?php

namespace PHPPeru\Parenthesis;

class Parenthesis
{
    public function parse($inputString)
    {
        $needleArray = array(
            array("(", ")"),
            array("[", "]"),
        );

        /*foreach ($needleArray as $needle)
        {
            $openningNumber = substr_count($inputString, $needle[0]);
            $closingNumber = substr_count($inputString, $needle[1]);
            if ($openningNumber != $closingNumber)
            {
                return false;
            }
        }

        return true;*/

        // lee 1 por 1
        if(!$this->validateIsEqualCharcterOrCloseCharacter($inputString))
        {
            return false;
        }
    }

    public function validateIsEqualCharcterOrCloseCharacter($inputString)
    {

        // ] = $character

        // $queue1 = [[[]
        // $queue2 = ()((

        if ($character == $queue1[strlen($queue1)])
        {
            // add
            $queue1 .= $character;
        }
        elseif ($character == $queue2[strlen($queue2)])
        {
            // remove $queue1
            $queue1 = substr($queue1, 0, strlen($queue1) - 2);
        }

    }
}
