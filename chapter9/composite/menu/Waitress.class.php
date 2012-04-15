<?php

class Waitress {
    protected $allMenus;

    public function __construct(MenuComponent $allMenus) {
        $this->allMenus = $allMenus;
    } 

    public function printMenu() {
        $this->allMenus->printv();
    }
}
