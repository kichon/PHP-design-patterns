<?php

class Waitress {
    protected $allMenus;

    public function __construct(MenuComponent $allMenus) {
        $this->allMenus = $allMenus;
    } 

    public function printMenu() {
        $this->allMenus->printv();
    }

    public function printVegetarianMenu() {
        $iterator = $this->allMenus->createIterator();

        echo "\nVEGETARIAN MENU\n----", PHP_EOL;
        while ($iterator->valid()) {
            $menuComponent = $iterator->current();

            try {
                if ($menuComponent->isVegetarian()) {
                    $menuComponent->printv();
                }
            } catch (Exception $e) {}

            $iterator->next();
        }
    }
}
