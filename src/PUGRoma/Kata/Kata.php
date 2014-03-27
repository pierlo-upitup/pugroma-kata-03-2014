<?php namespace PUGRoma\Kata;

class Kata {

	public function __construct() {
		$this->fizzBuzz = new FizzBuzz(3,5,15);
	}

	public function printFizzBuzzRange($from, $to) {
		$output = '';
		foreach($steps = range($from, $to) as $i) {
			if ( ! $this->fizzBuzz->isFizz($i) && ! $this->fizzBuzz->isBuzz($i)) {
				$output.= $i.' ';
				continue;		
			}
			if ($this->fizzBuzz->isFizzBuzz($i) ) {
				$output.= 'FizzBuzz? ';
				continue;
			}
			$output.= $this->fizzBuzz->isFizz($i) ? 'Fizz ' : 'Buzz ';
		}
		return $output;
	}
}