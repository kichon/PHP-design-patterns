<?php

class Stereo {
    private $location;

    public function __construct($location) {
        $this->location = $location;
    }
    
    public function on() {
        echo $this->location . " stereo is on", PHP_EOL;
    }

    public function off() {
        echo $this->location . " stereo is off", PHP_EOL;
    }

    public function setCD() {
        echo $this->location . " stereo is set for CD input", PHP_EOL;
    }

    public function setDVD() {
        echo $this->location . " stereo is set for DVD input", PHP_EOL;
    }

    public function setRadio() {
        echo $this->location . " stereo is set for Radio", PHP_EOL;
    }

    public function setVolume($volume) {
        echo $this->location . " Stereo volume set to " . $volume, PHP_EOL;
    }
}
