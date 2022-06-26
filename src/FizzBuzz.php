<?php
namespace App;

class FizzBuzz
{
    
    private int $check = 0;
    
    public function giveMeTheCheck():int{
	return $this->check;
    }
    
    public function sayANumber(int $number): String
    {
	++$this->check;

	
	if($number % 5 === 0 && $number % 3 === 0)
	{
	    
	    return "FizzBuzz";
	}

	if($number % 3 === 0)
	{
	    return "Fizz";
	}

	if($number % 5 === 0)
	{
	    return "Buzz";
	}

	return (String)$number;
    }


}
?>
