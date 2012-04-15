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

class QuackCounter implements Quackable {
    protected $duck;
    static protected $numberOfQuacks = 0;

    public function __construct(Quackable $duck) {
        $this->duck = $duck;
    }

    public function quack() {
        $this->duck->quack();
        self::$numberOfQuacks++;
    }

    static public function getQuacks() {
        return self::$numberOfQuacks;
    }

    public function __toString() {
        return $this->duck->__toString();
    }
}

class Flock implements Quackable {
    protected $quackers;

    public function __construct() {
        $this->quackers = new ArrayObject();
    }

    public function add(Quackable $quacker) {
        $this->quackers->append($quacker);
    }

    public function quack() {
        $iterator = $this->quackers->getIterator();

        while ($iterator->valid()) {
            $quacker = $iterator->current();
            $quacker->quack();
            $iterator->next();
        }
    }

    public function __toString() {
        return "Floack Of Quackers";
    }
}
