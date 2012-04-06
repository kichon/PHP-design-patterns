<?php

class Waitress {
    protected $pancakeHouseMenu;
    protected $dinerMenu;

    public function __construct($pancakeHouseMenu, $dinerMenu) {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu() {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();

        echo "MENU\n----\nBREAKFAST", PHP_EOL;
        $this->printMenus($pancakeIterator);
        echo "\nLUNCH", PHP_EOL;
        $this->printMenus($dinerIterator);
    }

    public function printMenus(Iterator $iterator) {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();

            echo $menuItem->getName() . ", ", PHP_EOL;
            echo $menuItem->getPrice() . " -- ", PHP_EOL;
            echo $menuItem->getDescription(), PHP_EOL;

            $iterator->next();
        }
    }

    public function printVegetarianMenu() {
        echo "\nVEGETARIAN MENU\n----\nBREAKFAST", PHP_EOL;
        $this->printVegetarianMenus($this->pancakeHouseMenu->createIterator());
        echo "\nLUNCH", PHP_EOL;
        $this->printVegetarianMenus($this->dinerMenu->createIterator());
    }

    public function isItemVegetarian($name) {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();

        if ($this->isVegetarian($name, $pancakeIterator)) {
            return true;
        }

        $dinerIterator = $this->dinerMenu->createIterator();
        if ($this->isVegetarian($name, $dinerIterator)) {
            return true;
        }

        return false;
    }

    private function printVegetarianMenus(Iterator $iterator) {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();

            if ($menuItem->isVegetarian()) {
                echo $menuItem->getName(), PHP_EOL;
                echo "\t\t" . $menuItem->getPrice();
                echo "\t" . $menuItem->getDescription();
            }

            $iterator->next();
        }
    }

    private function isVegetarian($name, Iterator $iterator) {
        while ($iterator->valid()) {
            $menuItem = $iterator->current();
            if ($menuItem->getName() == $name) {
                if ($menuItem->isVegetarian()) {
                    return true;
                }
            }
            $iterator->next();
        }
        return false;
    }
}
