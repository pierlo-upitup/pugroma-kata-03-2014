<?php namespace PUGRoma\Kata;

class FizzBuzz {
	
	private $fizzValue;
	private $buzzValue;

	public function __construct($fizzValue, $buzzValue) {
		$this->fizzValue = (int)$fizzValue;
		$this->buzzValue = (int)$buzzValue;
	}

	public function isFizz($number)	{
		return ( 0 === (int)$number % $this->fizzValue || FALSE !== strpos((string)$number, (string)$this->fizzValue) );
	}
	
	public function isBuzz($number)	{
		return ( 0 === (int)$number % $this->buzzValue || FALSE !== strpos((string)$number, (string)$this->buzzValue) );
	}

	public function isFizzBuzz($number) {
		return $this->isFizz($number) && $this->isBuzz($number);
	}
}