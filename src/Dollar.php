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
        $this->amount = $this->amount * $multiplier;
    }
}
