<?php

namespace PUGRoma\Kata;

class Kata
{
	private $from;
	private $to;
	private $formatter;

	public function __construct($from, $to) 
	{
		// TODO add checks
		$this->from = $from;
		$this->to = $to;

		$this->formatter = new NumberFormatter();
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
			
			$output.= $this->formatter->formatNumber($i);
		}

		return $output;
	}
}