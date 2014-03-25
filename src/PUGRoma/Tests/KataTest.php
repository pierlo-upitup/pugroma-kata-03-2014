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
    	$expected = '1 2 3 4 5 6 7 8 9 10 ';
    	$this->assertEquals($expected, $this->kata->printRange(1,10));
    }
}