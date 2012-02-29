<?php

namespace PHPPeru\Parenthesis;

class Parenthesis
{
    public function parse($inputString)
    {
        return !$this->validate($inputString) ? false : true;
    }

    public function validate($inputString)

   {
        $findString=array("()", "[]","{}");


        if(strlen($inputString)%2!=0){

           return false;

        }else{

            $repeat=strlen($inputString)/2;
           
            for($i=0;$i<=$repeat;$i++){

                $inputString = str_replace($findString,"", $inputString);
            }

            if($inputString==""){

                return true;

            }

            return false;

        }

        
    }
}
