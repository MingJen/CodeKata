<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FuzzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('FuzzBuzz');
    }

    function it_可以改變數字的結果，當給1時，結果為1(){
        $this->parseFuzzBuzz(1)->shouldReturn(1);
    }

    function it_可以改變數字的結果，當給2時，結果為2(){
        $this->parseFuzzBuzz(2)->shouldReturn(2);
    }

    function it_可以改變數字的結果，當給3時，結果為Fuzz(){
        $this->parseFuzzBuzz(3)->shouldReturn('Fuzz');
    }

    function it_可以改變數字的結果，當給4時，結果為4(){
        $this->parseFuzzBuzz(4)->shouldReturn(4);
    }
    function it_可以改變數字的結果，當給5時，結果為Buzz(){
        $this->parseFuzzBuzz(5)->shouldReturn('Buzz');
    }
}
