<?php

abstract class CaffeineBeverageWithHook {

    public function prepareRecipe() {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments())
            $this->addCondiments();
    }

    abstract function brew();
    abstract function addCondiments();

    public function boilWater() {
        echo "Boiling water", PHP_EOL;
    }

    public function pourInCup() {
        echo "Pouring into cup", PHP_EOL;
    }

    public function customerWantsCondiments() {
        return true;
    }
}
