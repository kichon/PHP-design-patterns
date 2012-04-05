<?php

abstract class CaffeineBeverage {

    final public function prepareRecipe() {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract public function brew();
    abstract public function addCondiments();

    public function boilWater() {
        echo "Boiling water", PHP_EOL;
    }

    public function pourInCup() {
        echo "Pouring into cup", PHP_EOL;
    }
}

class Coffee extends CaffeineBeverage {
    public function brew() {
        echo "Dripping Coffee through filter", PHP_EOL;
    }

    public function addCondiments() {
        echo "Adding Sugar and Milk", PHP_EOL;
    }
}

class Tea extends CaffeineBeverage {
    public function brew() {
        echo "Steeping the tea", PHP_EOL;
    }

    public function addCondiments() {
        echo "Adding Lemon";
    }
}
