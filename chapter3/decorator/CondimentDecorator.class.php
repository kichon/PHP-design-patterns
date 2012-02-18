<?php
require_once 'Beverage.class.php';

abstract class CondimentDecorator extends Beverage {
    //public function getDescription();
}

class Mocha extends CondimentDecorator {
    protected $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        return $this->beverage->getDescription() . ". モカ";
    }

    public function cost() {
        return 0.20 + $this->beverage->cost();
    }
}

class Whip extends CondimentDecorator {
    protected $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        return $this->beverage->getDescription() . ". ホイップ";
    }

    public function cost() {
        return 0.25 + $this->beverage->cost();
    }

}

class Soy extends CondimentDecorator {
    protected $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        return $this->beverage->getDescription() . ". 豆乳";
    }

    public function cost() {
        return 0.25 + $this->beverage->cost();
    }

}
