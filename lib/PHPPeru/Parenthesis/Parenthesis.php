<?php

namespace PHPPeru\Parenthesis;

class Parenthesis
{
    public function parse($inputString)
    {
        if(!$this->validate($inputString))
        {
            return false;
        }

        return true;
    }

    public function validate($inputString)
    {
        $queue1 = $queue2 = 0;
        $anterior = "";

        for ($i = 0; $i <= strlen($inputString)-1; $i++)
        {
            $character = $inputString[$i];

            if (!($queue1 >= 0 && $queue2 >= 0)) {
                return false;
            }

            if ($character == '(' || $character == ')') {
                if ($character == '(')
                {
                    $queue1++;
                }
                else
                {
                    if ($anterior == '[')
                    {
                        return false;
                    }
                    $queue1--;
                }
            }
            else {
                if ($character == '[')
                {
                    $queue2++;
                }
                else
                {
                    if ($anterior == '(')
                    {
                        return false;
                    }
                    $queue2--;
                }
            }

            $anterior = $character;
        }

        if ($queue1 == 0 && $queue2 == 0) {
            return true;
        }

        return false;
    }
}
