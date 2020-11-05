<?php

namespace App\Redux;

class Stringy
{
    private $string;

    public function __construct($string) 
    {
        $this->string = $string;
    }

    public function get() : string
    {
        return $this->string;
    }

    public function lower() : Stringy
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function upper() : Stringy
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append(string $newWord) : Stringy
    {
        $this->string = $this->string . $newWord;
        return $this;
    }

    public function repeat(int $num) : Stringy
    {
        $this->string = str_repeat($this->string, $num);
        return $this;
    }
}