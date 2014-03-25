<?php

namespace PUGRoma\Kata;

class Kata
{
	private $from;

	private $to;

	public function __constructor($from, $to) 
	{
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
			$output.= $i." ";
		}
		
		return $output;
	}
}