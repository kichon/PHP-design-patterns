<?php

class Tea {
    public function prepareRecipe() {
        $this->boilWater();
        $this->steepTeaBag();
        $this->pourInCup();
        $this->addLemon();
    }

    public function boilWater() {
        echo "Boiling water", PHP_EOL;
    }

    public function steepTeaBag() {
        echo "Steeping the tea", PHP_EOL;
    }

    public function addLemon() {
        echo "Adding Lemon", PHP_EOL;
    }

    public function pourInCup() {
        echo "Pouring into cup", PHP_EOL;
    }
}
