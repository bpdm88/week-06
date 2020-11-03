<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy

{
    private $string;

    public function __construct($string) 
    {
        $this->string = $string;
    }

    public function lower() {
       $string = $this->string;
       return strtolower($string);
    }

    public function upper() {
        $string = $this->string;
        return strtoupper($string);
     }

     public function append($newWord) {
        $string = $this->string;
        return $string . $newWord;
     }

     public function repeat($num) {
        $string = $this->string;
        return str_repeat($string, $num);
     }

}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"