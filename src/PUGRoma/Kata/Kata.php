<?php

namespace PUGRoma\Kata;

class Kata
{
    public function isReady()
    {
        return true;
    }

	public function printRange($from, $to)
	{
		$output = '';
		for ($i = $from; $i <= $to; $i++) 
		{
			$output.= $i." ";
		}
		return $output;
	}
}