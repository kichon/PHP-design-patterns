<?php

interface QuackObservable {
    public function registerObserver(Observer $observer);
    public function notifyObservers();
}

interface Quackable extends QuackObservable {
    public function quack();
}

class Observable implements QuackObservable {
    protected $observers;
    protected $duck;

    public function __construct(QuackObservable $duck) {
        $this->duck = $duck;
    }

    public function registerObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function notifyObservers() {
        $arrayobject = new ArrayObject($this->observers);
        $iterator = $arrayobject->getIterator();

        while ($iterator->valid()) {
            $observer = $iterator->current();
            $observer->update($this->duck);

            $iterator->next();
        }
    }

    public function getObservers() {
        $arrayobject = new ArrayObject($this->observers);
        return $arrayobject->getIterator();
    }
}

class DuckCall implements Quackable {
    protected $observable;

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function quack() {
        echo "Kwak", PHP_EOL;
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __toString() {
        return "Duck Call";
    }
}

class RedheadDuck implements Quackable {
    protected $observable;

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function quack() {
        echo "Quack", PHP_EOL;
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __toString() {
        return "Redhead Duck";
    }
}

class RubberDuck implements Quackable {
    protected $observable;

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function quack() {
        echo "Squeak", PHP_EOL;
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __toString() {
        return "Rubber Duck";
    }
}

class MallardDuck implements Quackable {
    protected $observable;

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function quack() {
        echo "Quack", PHP_EOL;
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __toString() {
        return "Mallard Duck";
    }
}

class DecoyDuck implements Quackable {
    protected $observable;

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function quack() {
        echo "<< Silence >>", PHP_EOL;
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __toString() {
        return "Decoy Duck";
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

    public function registerObserver(Observer $observer) {
        $this->duck->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->duck->notifyObservers();
    }

    public function __toString() {
        return $this->duck->__toString();
    }
}

class Flock implements Quackable {
    protected $ducks;

    public function __construct() {
        $this->ducks = new ArrayObject();
    }

    public function add(Quackable $quacker) {
        $this->ducks->append($quacker);
    }

    public function quack() {
        $iterator = $this->ducks->getIterator();

        while ($iterator->valid()) {
            $quacker = $iterator->current();
            $quacker->quack();
            $iterator->next();
        }
    }

    public function registerObserver(Observer $observer) {
        $iterator = $this->ducks->getIterator();

        while ($iterator->valid()) {
            $duck = $iterator->current();
            $duck->registerObserver($observer);
            $iterator->next();
        }
    }

    public function notifyObservers() {}

    public function __toString() {
        return "Floack Of Ducks";
    }
}
