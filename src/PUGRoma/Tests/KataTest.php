<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
	private $kata;

	public funcion setUp()
	{
		$this->kata = new Kata();
	}

    public function testStart()
    {
    
        $this->assertTrue($this->kata->isReady());
    }

    public function test_it_prints_from_1_to_100()
    {
    	return false;
    }
}