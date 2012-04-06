<?php

interface QuackObservable {
    public function registerObserver(Observer $observer);
    public function notifyObservers();
}

interface Quackable extends QuackObservable {
    public function quack();
}
