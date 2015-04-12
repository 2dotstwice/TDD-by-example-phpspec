<?php

namespace WyCash\WyCash;

class Dollar
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new self($this->amount * $multiplier);
    }
}
