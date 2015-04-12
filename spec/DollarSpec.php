<?php

namespace spec\WyCash\WyCash;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use WyCash\WyCash\Dollar;

/**
 * @mixin Dollar
 */
class DollarSpec extends ObjectBehavior
{
    function it_multiplies()
    {
        $this->beConstructedWith(5);
        $this->times(2);
        $this->amount->shouldBe(10);
    }
}
