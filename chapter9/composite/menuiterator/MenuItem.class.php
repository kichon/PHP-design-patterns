<?php
require_once 'MenuComponent.class.php';

class MenuItem extends MenuComponent {
    protected $name;
    protected $description;
    protected $vegetarian;
    protected $price;

    public function __construct($name, $description, $vegetarian, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->vegetarian;
    }

    public function isVegetarian() {
        return $this->vegetarian;
    }

    public function createIterator() {
        return new NullIterator();
    }

    public function printv() {
        echo "  " . $this->getName();
        if ($this->isVegetarian()) {
            echo "(v)";
        }
        echo ", " . $this->getPrice();
        echo "      -- " . $this->getDescription(), PHP_EOL;
    }
}
