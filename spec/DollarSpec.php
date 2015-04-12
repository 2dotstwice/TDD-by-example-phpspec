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
        $product = $this->times(2);
        $product->amount->shouldBe(10);
        $product = $this->times(3);
        $product->amount->shouldBe(15);
    }
}
