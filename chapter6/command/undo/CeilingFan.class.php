<?php

class CeilingFan {
    private $location;
    private $speed;
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;

    public function __construct($location) {
        $this->location = $location;
        $this->speed = self::OFF;
    }

    public function high() {
        $this->speed = self::HIGH;
        echo $this->location . " ceiling fan is on high", PHP_EOL;
    }

    public function medium() {
        $this->speed = self::MEDIUM;
        echo $this->location . " ceiling fan is on medium", PHP_EOL;
    }

    public function low() {
        $this->speed = self::LOW;
        echo $this->location . " ceiling fan is on low", PHP_EOL;
    }

    public function off() {
        $this->speed = self::OFF;
        echo $this->location . " ceiling fan is off", PHP_EOL;
    }

    public function getSpeed() {
        return $this->speed;
    }
}
