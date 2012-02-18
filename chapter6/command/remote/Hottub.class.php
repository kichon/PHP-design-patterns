<?php

class Hottub {
    private $on;
    private $temperature;

    public function __construct() { }

    public function on() {
        $this->on = true;
    }

    public function off() {
        $this->on = false;
    }

    public function bubblesOn() {
        if ($this->on) {
            echo "Hottub is bubbling!", PHP_EOL;
        }
    }

    public function bubblesOff() {
        if ($this->on) {
            echo "Hottub is not bubbling", PHP_EOL;
        }
    }
    
    public function jetsOn() {
        if ($this->on) {
            echo "Hottub jets area on", PHP_EOL;
        }
    }

    public function jetsOff() {
        if ($this->on) {
            echo "Hottub jets are off", PHP_EOL;
        }
    }

    public function setTemperature($temperature) {
        $this->temperature = $temperature;
    }

    public function heat() {
        $this->temperature = 105;
        echo "Hottub is heating to a steaming 105 degrees", PHP_EOL;
    }

    public function cool() {
        $this->temperature = 98;
        echo "Hottub is cooling to 98 degrees", PHP_EOL;
    }
}
