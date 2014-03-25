<?php namespace PUGRoma\Kata;

class NumberFormatter {
	
	public function formatNumber($number) 
	{	
		$output = '';
		if ($number % 3 == 0 || $number % 5 == 0) {
			if ($number % 3 == 0) {
				$output.= 'Fizz';
			} 
			if ($number % 5 == 0) {
				$output.= 'Buzz';	
			}
			if ($number % 3 == 0 && $number % 5 == 0) {
				$output.= '?';
			}
		} else {
			$output.= $number;
		}
		return $output.= " ";
	}
}