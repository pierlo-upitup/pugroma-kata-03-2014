<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
	private $kata;

	public function setUp()
	{
		$this->kata = new Kata();
	}

    public function testStart()
    {
    
        $this->assertTrue($this->kata->isReady());
    }

    public function testItPrintsFrom1To10()
    {
    	$this->assertTrue(false);
    }
}