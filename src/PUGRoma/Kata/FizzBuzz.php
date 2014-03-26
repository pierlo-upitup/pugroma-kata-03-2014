<?php namespace PUGRoma\Kata;

class FizzBuzz {
	
	private $fizzValue;
	private $buzzValue;
	private $fizzBuzzValue;

	public function __construct($fizzValue, $buzzValue, $fizzBuzzValue)
	{
		$this->fizzValue = $fizzValue;
		$this->buzzValue = $buzzValue;
		$this->fizzBuzzValue = $fizzBuzzValue;
	}

	public function isFizz($number)
	{
		return (0 === ( (int)$number) % $this->fizzValue );
	}
	
	public function isBuzz($number)
	{
		return (0 === ( (int)$number) % $this->buzzValue );
	}

	public function isFizzBuzz($number) 
	{
		return (0 === ( (int)$number) % $this->fizzBuzzValue );
	}
}