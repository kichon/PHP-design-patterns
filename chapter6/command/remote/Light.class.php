<?php

class Light {
    private $location;

    public function __construct($location) {
        $this->location = $location;
    }

    public function on() {
        echo $this->location . " Light is on", PHP_EOL;
    }

    public function off() {
        echo $this->location . " Light is off", PHP_EOL;
    }
}
