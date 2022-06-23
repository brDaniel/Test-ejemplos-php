<?php
namespace App;

class Operations{

    public function __constructor(){
        
    }

    public function addition( $number1, $number2 )
    {
        if($number1 === NULL || $number2 === NULL || !is_numeric($number1) || !is_numeric($number2)) throw new \InvalidArgumentException('Values are not numeric');
                                                                                                                    
        return $number1 + $number2;
        
    }

    public function division($number1, $number2)
    {
        if($number2===0)throw new \DivisionByZeroError();

        if($number1 === NULL || $number2 === NULL || !is_numeric($number1) || !is_numeric($number2)) throw new \InvalidArgumentException('Values are not numeric');
        
        return $number1 / $number2;
    }
}
?>