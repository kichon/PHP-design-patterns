<?php

class PopcornPopper {
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

    public function pop() {
        echo $this->description." poping popcorn!", PHP_EOL;
    }

    public function __toString() {
        return $this->description;
    }
}
