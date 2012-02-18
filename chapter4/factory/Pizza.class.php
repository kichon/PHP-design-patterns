<?php
abstract class Pizza
{
    public $name;
    public $dough;
    public $sauce;
    public $veggies = array();
    public $cheese;
    public $peperoni;
    public $clam;

    /*
    public function prepare()
    {
        echo ' - 食材を用意してピザをコネコネします', PHP_EOL;
    }
    */
    abstract public function prepare();
    public function bake() {
        echo "350度で25分間焼く", PHP_EOL;
    }
    public function cut() {
        echo "ピザを扇型に切り分ける", PHP_EOL;
    }
    public function box() {
        echo "PizzaStoreの正式な箱にピザを入れる", PHP_EOL;
    }
    //abstract public function bake();
    //abstract public function cut();
    //abstract public function box();
}

class PlainPizza extends Pizza {
    public $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare() {
        echo $this->name . "を下処理", PHP_EOL;
        $this->dough = $this->ingredientFactory->createDogh();
        $this->souce = $this->ingredientFactory->createSauce();
    }

}
class CheesePizza extends Pizza {
    public $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare() {
        echo $this->name . "を下処理", PHP_EOL;
        $this->dough = $this->ingredientFactory->createDogh();
        $this->souce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}

class ClamPizza extends Pizza {
    public $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare() {
        echo $this->name . "を下処理", PHP_EOL;
        $this->dough = $this->ingredientFactory->createDogh();
        $this->souce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}

/**
 * NY
 */
/*
class NYPlainPizza extends Pizza
{
    public function __construct()
    {
        echo 'プレーンピザを作成します', PHP_EOL;
    }
    public function bake()
    {
        echo ' - 20分焼きます', PHP_EOL;
    }

    public function cut()
    {
        echo ' - 2等分に切ります', PHP_EOL;
    }

    public function box()
    {
        echo ' - 通常の箱につめます', PHP_EOL;
    }
}

class NYCheesePizza extends Pizza
{
    public function __construct()
    {
        echo 'チーズピザを作成します', PHP_EOL;
    }
    public function bake()
    {
        echo ' - 30分焼きます', PHP_EOL;
    }

    public function cut()
    {
        echo ' - 3等分に切ります', PHP_EOL;
    }

    public function box()
    {
        echo ' - リボンのついた箱につめます', PHP_EOL;
    }
}

class NYSeaFood extends Pizza
{
    public function __construct()
    {
        echo 'シーフードピザを作成します', PHP_EOL;
    }
    public function bake()
    {
        echo ' - 40分焼きます', PHP_EOL;
    }

    public function cut()
    {
        echo ' - 4等分に切ります', PHP_EOL;
    }

    public function box()
    {
        echo ' - 花の箱につめます', PHP_EOL;
    }
}
*/


/**
 * LA
 */
/*
class LAPlainPizza extends Pizza
{
    public function __construct()
    {
        echo 'プレーンピザを作成します', PHP_EOL;
    }
    public function bake()
    {
        echo ' - 20分焼きます', PHP_EOL;
    }

    public function cut()
    {
        echo ' - 2等分に切ります', PHP_EOL;
    }

    public function box()
    {
        echo ' - 通常の箱につめます', PHP_EOL;
    }
}

class LACheesePizza extends Pizza
{
    public function __construct()
    {
        echo 'チーズピザを作成します', PHP_EOL;
    }
    public function bake()
    {
        echo ' - 30分焼きます', PHP_EOL;
    }

    public function cut()
    {
        echo ' - 3等分に切ります', PHP_EOL;
    }

    public function box()
    {
        echo ' - リボンのついた箱につめます', PHP_EOL;
    }
}

class LASeaFood extends Pizza
{
    public function __construct()
    {
        echo 'シーフードピザを作成します', PHP_EOL;
    }
    public function bake()
    {
        echo ' - 40分焼きます', PHP_EOL;
    }

    public function cut()
    {
        echo ' - 4等分に切ります', PHP_EOL;
    }

    public function box()
    {
        echo ' - 花の箱につめます', PHP_EOL;
    }
}
*/
