<?php

class Projector {
    private $description;
    private $dvdPlayer;

    public function __construct($description, DvdPlayer $dvdPlayer) {
        $this->description = $description;
        $this->dvdPlayer = $dvdPlayer;
    }

    public function on() {
        echo $this->description." on", PHP_EOL;
    }

    public function off() {
        echo $this->description." off", PHP_EOL;
    }

    public function wideScreenMode() {
        echo $this->description." in widescreen mode (16x9 aspect ratio)", PHP_EOL;
    }

    public function tvMode() {
        echo $this->description." in tv mode (4x3 aspect ratio)", PHP_EOL;
    }

    public function __toString() {
        return $this->description();
    }
}
