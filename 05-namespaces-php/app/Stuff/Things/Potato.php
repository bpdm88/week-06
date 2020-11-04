<?php

namespace App\Stuff\Things;

class Potato
{
    private $water = 0;

    public function water()
    {
        $this->water += 1;
    }

    public function hasGrown()
    {
        return $this->water >= 5 === true;

    }
}