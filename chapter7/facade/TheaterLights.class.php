<?php

class TheaterLights {
    private $description;

    public function __construct($description) {
        $this->description = $description;
    }

    public function on() {
        echo $this->description." on", PHP_EOL;
    }

    public function off() {
        echo $this->description." off", PHP_EOL;
    }

    public function dim($level) {
        echo $this->description." dimming to ".$level."%", PHP_EOL;
    }

    public function __toString() {
        return $this->description;
    }
}
