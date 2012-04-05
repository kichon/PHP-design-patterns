<?php

class Tuner {
    private $description;
    private $amplifier;
    private $frequency;

    public function __construct($description, Amplifier $amplifier) {
        $this->description = $description;
    }

    public function on() {
        echo $this->description." on", PHP_EOL;
    }

    public function off() {
        echo $this->description." off", PHP_EOL;
    }

    public function setFrequency($frequency) {
        echo $this->description." setting frequency to ".$frequency;
        $this->frequency = $frequency;
    }

    public function setAm() {
        echo $this->description." setting AM mode", PHP_EOL;
    }

    public function setFm() {
        echo $this->description." setting FM mode", PHP_EOL;
    }

    public function __toString() {
        return $this->description;
    }
}
