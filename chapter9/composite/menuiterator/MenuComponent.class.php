<?php

abstract class MenuComponent {

    public function add(MenuComponent $menuComponent) {
        throw new Exception();
    }
    public function remove(MenuComponent $menuComponent) {
        throw new Exception();
    }
    public function getChild($i) {
        throw new Exception();
    }
    public function getName() {
        throw new Exception();
    }
    public function getDescription() {
        throw new Exception();
    }
    public function getPrice() {
        throw new Exception();
    }
    public function isVegetarian() {
        throw new Exception();
    }
    abstract public function createIterator();
    public function printv() {
        throw new Exception();
    }
}
