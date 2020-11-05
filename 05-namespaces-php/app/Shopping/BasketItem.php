<?php

namespace App\Shopping;

class BasketItem
{
    private $type;
    private $price;

    public function __construct($type, $price)
    {
        $this->type = $type;
        $this->price = $price;
    }

    public function type() : string
    {
        return $this->type;
    }

    public function price() : float
    {
        return $this->price;
    }

    public function priceFormatted() : string
    {
        return "£" . number_format($this->price, 2);
    }
}