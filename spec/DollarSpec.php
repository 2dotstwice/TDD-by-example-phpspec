<?php

namespace spec\WyCash\WyCash;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DollarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('WyCash\WyCash\Dollar');
    }
}
