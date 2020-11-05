<?php

require __DIR__ . "/vendor/autoload.php";

class Phone 
{
    private $model;
    private $make;

    public function __construct(string $model, string $make)
    {
        $this->model = $model;
        $this->make = $make;
    }

    public function model() : string {
        return $this->model;
    }

    public function make() : string {
        return $this->make;
    }

}

// create three phones
$iPhone = new Phone("Apple", "iPhone XS");
$galaxy = new Phone("Samsung", "Galaxy");
$retro = new Phone("Nokia", "3210");

// use methods to find out model/make
dump($iPhone->model()); // "iPhone XS"
dump($retro->make()); // "Nokia"
dump($galaxy->make()); // "Samsung"
dump($iPhone->make()); // "Apple"