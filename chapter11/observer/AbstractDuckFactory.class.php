<?php

abstract class AbstractDuckFactory {
    abstract public function createMallardDuck();
    abstract public function createRedheadDuck();
    abstract public function createDuckCall();
    abstract public function createRubberDuck();
}

class CountingDuckFactory extends AbstractDuckFactory {

    public function createMallardDuck() {
        return new QuackCounter(new MallardDuck());
    }

    public function createRedheadDuck() {
        return new QuackCounter(new RedheadDuck());
    }

    public function createDuckCall() {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck() {
        return new QuackCounter(new RubberDuck());
    }
}

class DuckFactory extends AbstractDuckFactory {

    public function createMallardDuck() {
        return new MallardDuck();
    }

    public function createRedheadDuck() {
        return new RedheadDuck();
    }

    public function createDuckCall() {
        return new DuckCall();
    }

    public function createRubberDuck() {
        return new RubberDuck();
    }
}
