<?php

namespace PUGRoma\Kata;

class Kata
{
	private $from;
	private $to;

	public function __construct($from, $to) 
	{
		// TODO add checks
		$this->from = $from;
		$this->to = $to;
	}

    public function isReady()
    {
        return true;
    }

	public function printRange()
	{
		$output = '';
		for ($i = $this->from; $i <= $this->to; $i++) 
		{
			if ($i % 3 == 0 || $i % 5 == 0) {
				if ($i % 3 == 0) {
					$output.= 'Fizz';
				} 
				if ($i % 5 == 0) {
					$output.= 'Buzz';	
				}
				if ($i % 3 == 0 && $i % 5 == 0) {
					$output.= '?';
				}
			} else {
				$output.= $i;
			}
			$output.= ' ';
		}

		return $output;
	}
}