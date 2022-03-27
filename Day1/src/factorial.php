<?php
class factorial
{


    function calc_factorial($var)
    {
        if ($var == 0) {
            $result = 1;
        }
        if (is_int($var)) {
            if ($var<0)
            {
                $result=null;
            }
            else
           {
            $factorial = 1;
            for ($x = $var; $x >= 1; $x--) {
                $factorial *= $x;
            }
            $result=$factorial;
        }
        }
        else{
            return null;
        }
        return $result;
    }
}
