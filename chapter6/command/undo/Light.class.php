<?php

class Light {
    private $location;
    private $level;

    public function __construct($location) {
        $this->location = $location;
    }

    public function on() {
        $this->level = 100;
        echo $this->location . " Light is on", PHP_EOL;
    }

    public function off() {
        $this->level = 0;
        echo $this->location . " Light is off", PHP_EOL;
    }

    public function dim($level) {
        $this->level = $level;
        if ($level == 0) {
            $this->off();
        } else {
            echo "Light is dimmed to " . $level . "%", PHP_EOL;
        }
    }

    public function getLevel() {
        return $this->level;
    }
}
