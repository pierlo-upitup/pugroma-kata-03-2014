<?php

namespace PUGRoma\Kata;

class Kata
{

	public function __construct() 
	{
		$this->fizzBuzz = new FizzBuzz(3,5,15);
	}

	public function printFizzBuzzRange($from, $to) 
	{
		$output = '';
		for ($i = (int)$from; $i <= (int)$to; $i++) 
		{
			if ($this->fizzBuzz->isFizz($i) || $this->fizzBuzz->isBuzz($i)) 
			{
				if ($this->fizzBuzz->isFizzBuzz($i)) 
				{
					$output.= 'FizzBuzz? ';
					continue;
				}
				$output.= $this->fizzBuzz->isFizz($i) ? 'Fizz ' : 'Buzz ';
				continue;
			}
			$output.= $i.' ';
			continue;
		}
		return $output;
	}
}