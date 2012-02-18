<?php
require_once 'Pizza.class.php';
require_once 'PizzaIngredientFactory.class.php';

abstract class PizzaStore
{
    protected $_pizza;

    public function order($pizza) {

        $this->create($pizza);

        $this->_pizza->prepare();
        $this->_pizza->bake();
        $this->_pizza->cut();
        $this->_pizza->box();
        return $this->_pizza;
    }

    abstract protected function create($pizza);
}

class NYPizzaStore extends PizzaStore
{
    public function __construct()
    {
        echo 'ニューヨーク店がご注文を承ります', PHP_EOL;
    }

    public function create($pizza)
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($pizza == 'plain') {
            //$this->_pizza = new NYPlainPizza();
            $this->_pizza = new PlainPizza($ingredientFactory);
        } elseif ($pizza == 'cheese') {
            //$this->_pizza = new NYCheesePizza();
            $this->_pizza = new CheesePizza($ingredientFactory);
        } elseif ($pizza == 'seafood') {
            //$this->_pizza = new NYSeaFood();
            $this->_pizza = new SeaFood($ingredientFactory);
        } else {
            return false;
        }

        return $this->_pizza;
    }
}
class LAPizzaStore extends PizzaStore
{
    public function __construct()
    {
        echo 'ロサンゼルス店がご注文を承ります', PHP_EOL;
    }

    public function create($pizza)
    {
        if ($pizza == 'plain') {
            $this->_pizza = new LAPlainPizza();
        } elseif ($pizza == 'cheese') {
            $this->_pizza = new LACheesePizza();
        } elseif ($pizza == 'seafood') {
            $this->_pizza = new LASeaFood();
        } else {
            return false;
        }
    }
}
