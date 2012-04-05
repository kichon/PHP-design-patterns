<?php
require_once 'CaffeineBeverageWithHook.class.php';

class TeaWithHook extends CaffeineBeverageWithHook {

    public function brew() {
        echo "Steeping the tea", PHP_EOL;
    }

    public function addCondiments() {
        echo "Adding Lemon", PHP_EOL;
    }

    public function customerWantsCondiments() {
        $answer = $this->getUserInput();

        if (trim($answer) == "y") {
            return true;
        } else {
            return false;
        }
    }

    private function getUserInput() {
        $answer = null;

        echo "Would you like lemon with your coffee (y/n)? ", PHP_EOL;
        $answer = file_get_contents("php://stdin");

        return $answer;
    }

}
