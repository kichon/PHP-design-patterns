<?php

class GarageDoor {
    private $location;

    public function __construct($location) {
        $this->location = $location;
    }

    public function up() {
        echo $this->location . " garage Door is Up", PHP_EOL;
    }

    public function down() {
        echo $this->location . " garage Door is Down", PHP_EOL;
    }

    public function stop() {
        echo $this->location . " garage Door is Stopped", PHP_EOL;
    }

    public function lightOn() {
        echo $this->location . " garage Light is on", PHP_EOL;
    }

    public function lightOff() {
        echo $this->location . " garage Light is off", PHP_EOL;
    }
}
