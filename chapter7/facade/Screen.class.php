<?php

class Screen {
    private $description;

    public function __construct($description) {
        $this->description = $description;
    }

    public function up() {
        echo $this->description." going up", PHP_EOL;
    }

    public function down() {
        echo $this->description." going down", PHP_EOL;
    }

    public function __toString() {
        return $this->description;
    }
}
