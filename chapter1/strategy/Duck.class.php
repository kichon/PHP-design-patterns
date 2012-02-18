<?php
require 'FlyBehavior.class.php';
require 'QuackBehavior.class.php';

abstract class Duck
{
    protected $quackBehavior;
    protected $flyBehavior;

    public abstract function display();

    public function performQuack()
    {
        $this->quackBehavior->doQuack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function swim()
    {
        echo '全ての鴨は浮かびます。おとりの鴨でも!', PHP_EOL;
    }
}

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo '本物のマガモです', PHP_EOL;
    }
}

/*
class RedHeadDuck extends Duck
{
}

class RubberDuck extends Duck
{
}
*/
