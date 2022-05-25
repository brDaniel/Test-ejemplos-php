<?php
namespace App;

class FizzBuzz
{
    
    public function sayANumber(int $number): String
    {

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
