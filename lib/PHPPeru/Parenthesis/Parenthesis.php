<?php

namespace PHPPeru\Parenthesis;

class Parenthesis
{
    public function parse($inputString)
    {
        if(!$this->validateIsEqualCharcterOrCloseCharacter($inputString))
        {
            return false;
        }

        return true;
    }

    public function validateIsEqualCharcterOrCloseCharacter($inputString)
    {
        $queue1 = 0;
        $queue2 = 0;
        //var_export(strlen($inputString)-1);die;
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
                    $queue2--;
                }
            }
        }

        if ($queue1 == 0 && $queue2 == 0) {
            return true;
        }

        return false;
    }
}
