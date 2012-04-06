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
    protected $quackers = array();

    public function add(Quackable $quaacker) {
        $this->quackers[] = $quaacker;
    }

    public function quack() {
        $iterator = new MyIterator($this->quackers);
        while ($iterator.next()) {
            $quacker = $iterator->current();
            $quacker->quack();
        }
    }

    public function __toString() {
        return "Flock of Quackers";
    }
}

class MyIterator implements Iterator {
    private $array = array();
    private $size = 0;
    private $pos = 0;

    public function __construct($array) {
        if (! is_array($array)) {
            $this->array = array($array);
        }

        $this->array = $array;
        $this->size = count($array);
        $this->pos = 0;
    }

    public function current() {
        return $this->array[$this->pos];
    }

    public function key() {
        return $this->pos;
    }

    public function next() {
        return $this->pos++;
    }

    public function rewind() {
        return $this->pos = 0;
    }

    public function valid() {
        return isset($this->array[$this->pos]);
    }
}
