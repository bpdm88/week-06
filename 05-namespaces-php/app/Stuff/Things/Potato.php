<?php

namespace App\Stuff\Things;

class Potato
{
    private $water = 0;

    public function water() : void
    {
        $this->water += 1;
    }

    public function hasGrown() : bool
    {
        return $this->water >= 5 === true;

    }
}