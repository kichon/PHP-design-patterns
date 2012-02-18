<?php

class GarageDoor
{
    public function __construct() {
    }

    public function up() {
        echo "Garage Door is Open", PHP_EOL;
    }

    public function down() {
        echo "Garage Door is Closed", PHP_EOL;
    }

    public function stop() {
        echo "Garage Door is Stopped", PHP_EOL;
    }

    public function lightOn() {
        echo "Garage light is on", PHP_EOL;
    }

    public function lightOff() {
        echo "Garage light is off", PHP_EOL;
    }
}
