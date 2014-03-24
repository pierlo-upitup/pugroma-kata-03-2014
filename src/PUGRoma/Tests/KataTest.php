<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    public function testStart()
    {
        $kata = new Kata();
        $this->assertTrue($kata->isReady());
    }
}