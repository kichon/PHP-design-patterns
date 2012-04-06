<?php

interface Observer {
    public function update(QuackObservable $duck);
}

class Quackologist implements Observer {
    public function update(QuackObservable $duck) {
        echo "Quackologist: " . $duck . " just quacked.", PHP_EOL;
    }

    public function __toString() {
        return "Quackologist";
    }
}
