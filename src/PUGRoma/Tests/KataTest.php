<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{

    public function setUp() 
    {
        $this->kata = new Kata();
    }

    public function test_it_returns_fizz_for_multiples_of_3()
    {
        $fizzBuzz = new FizzBuzz(3,5);
        $this->assertEquals(true, $fizzBuzz->isFizz(3));
        $this->assertEquals(true, $fizzBuzz->isFizz(6));
        $this->assertEquals(false, $fizzBuzz->isFizz(7));
    }

    public function test_it_returns_buzz_for_mutliples_of_5()
    {
        $fizzBuzz = new FizzBuzz(3,5);
        $this->assertEquals(true, $fizzBuzz->isBuzz(5));
        $this->assertEquals(true, $fizzBuzz->isBuzz(10));
        $this->assertEquals(false, $fizzBuzz->isBuzz(13));
    }

    public function test_it_returns_fizzbuzz_for_mutliples_of_15()
    {
        $fizzBuzz = new FizzBuzz(3,5);
        $this->assertEquals(true, $fizzBuzz->isFizzBuzz(15));
        $this->assertEquals(true, $fizzBuzz->isFizzBuzz(30));
        $this->assertEquals(false, $fizzBuzz->isFizzBuzz(13));
    }

    public function test_it_prints()
    {
        // Test it prints Fizz for multiples of 3, Buzz for multiples of 5, FizzBuzz? for multiples of both 3 and 5 
        // ADDED: check if the number contains the value as "string" (ie 13 is Fizz, 53 is Buzz etc)
        $expected = '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz Fizz 14 FizzBuzz? 16 17 Fizz 19 Buzz Fizz 22 Fizz Fizz Buzz ';
        $this->assertEquals($expected, $this->kata->printFizzBuzzRange(1, 25));

    }
}