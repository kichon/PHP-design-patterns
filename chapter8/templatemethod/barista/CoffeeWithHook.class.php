<?php
require_once 'CaffeineBeverageWithHook.class.php';

class CoffeeWithHook extends CaffeineBeverageWithHook {

    public function brew() {
        echo "Dripping Coffee through filter", PHP_EOL;
    }

    public function addCondiments() {
        echo "Adding Sugar and Milk", PHP_EOL;
    }

    public function customerWantsCondiments() {
        //$answer = file_get_contents("php://stdin");
        $answer = $this->getUserInput();

        if (trim($answer) == "y") {
            return true;
        } else {
            return false;
        }
    }

    private function getUserInput() {
        $answer = null;

        echo "Would you like milk and sugar with your coffee (y/n)? ", PHP_EOL;
        $answer = file_get_contents("php://stdin");

        return $answer;
    }
}
