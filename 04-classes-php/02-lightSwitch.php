<?php

require __DIR__ . "/vendor/autoload.php";

class LightSwitch 
{
    private $isOn = false;

    public function isOn() : bool 
    {
        return $this->isOn;
    }

    public function turnOn() : void
    {
        $this->isOn = true;
    }

    public function turnOff() : void
    {
        $this->isOn = false;
    }
    
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false
