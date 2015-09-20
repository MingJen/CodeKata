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
        $this->shouldReturn(1);
    }
}
