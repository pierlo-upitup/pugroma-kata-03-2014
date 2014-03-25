<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{

    public function testStart()
    {
    	$kata = new Kata(1,1);
        $this->assertTrue($kata->isReady());
    }

    public function testItPrintsFrom1To10()
    {
    	$kata = new Kata(1,10);
    	$expected = '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz ';
    	$this->assertEquals($expected, $kata->printRange());
    }
}