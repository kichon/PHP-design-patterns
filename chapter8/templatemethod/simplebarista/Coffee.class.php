<?php

class Coffee {
    public function prepareRecipe() {
        $this->boilWater();
        $this->brewCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMilk();
    }

    public function boilWater() {
        echo "Boiling water", PHP_EOL;
    }

    public function brewCoffeeGrinds() {
        echo "Dripping Coffee through filter", PHP_EOL;
    }

    public function pourInCup() {
        echo "Pouring into cup", PHP_EOL;
    }

    public function addSugarAndMilk() {
        echo "Adding Sugar and Milk", PHP_EOL;
    }
    
}
