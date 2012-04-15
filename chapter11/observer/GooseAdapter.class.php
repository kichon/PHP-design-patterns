<?php

class GooseAdapter implements Quackable {
    protected $goose;
    protected $observable;

    public function __construct(Goose $goose) {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    public function quack() {
        $this->goose->honk();
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __toString() {
        return "Goose pretending to be a Duck";
    }
}
