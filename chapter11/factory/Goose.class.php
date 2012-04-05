<?php

class Goose {
    public function honk() {
        echo "Honk", PHP_EOL;
    }

    public function __toString() {
        return "Goose";
    }
}
