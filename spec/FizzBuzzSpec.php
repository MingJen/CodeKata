<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('FizzBuzz');
    }

    function it_可以改變數字的結果，當給1時，結果為1(){
        $this->parseFizzBuzz(1)->shouldReturn(1);
    }

    function it_可以改變數字的結果，當給2時，結果為2(){
        $this->parseFizzBuzz(2)->shouldReturn(2);
    }

    function it_可以改變數字的結果，當給3時，結果為Fuzz(){
        $this->parseFizzBuzz(3)->shouldReturn('Fizz');
    }

    function it_可以改變數字的結果，當給4時，結果為4(){
        $this->parseFizzBuzz(4)->shouldReturn(4);
    }

    function it_可以改變數字的結果，當給5時，結果為Buzz(){
        $this->parseFizzBuzz(5)->shouldReturn('Buzz');
    }

    function it_可以改變數字的結果，當給6時，結果為Fizz(){
        $this->parseFizzBuzz(6)->shouldReturn('Fizz');
    }

    function it_可以改變數字的結果，當給15時，結果為FizzBuzz(){
        $this->parseFizzBuzz(15)->shouldReturn('FizzBuzz');
    }

    function it_可以給最大值，會得到1到最大值的FizzBuzz陣列()
    {
        $this->getFizzBuzzArray(10)->shouldReturn(['1', '2', 'Fuzz', '4', 'Buzz', 'Fizz', '7', '8', 'Fizz', 'Buzz']);
    }
}
