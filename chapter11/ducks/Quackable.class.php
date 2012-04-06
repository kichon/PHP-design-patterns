<?php

interface Quackable {
    public function quack();
}

class DuckCall implements Quackable {
    public function quack() {
        echo "Kwak", PHP_EOL;
    }
}

class RedheadDuck implements Quackable {
    public function quack() {
        echo "Quack", PHP_EOL;
    }
}

class RubberDuck implements Quackable {
    public function quack() {
        echo "Squeak", PHP_EOL;
    }
}

class MallardDuck implements Quackable {
    public function quack() {
        echo "Quack", PHP_EOL;
    }
}

class DecoyDuck implements Quackable {
    public function quack() {
        echo "<< Silence >>", PHP_EOL;
    }
}
