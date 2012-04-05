<?php
require_once 'Quackable.class.php';
require_once 'Goose.class.php';
require_once 'GooseAdapter.class.php';

class DuckSimulator {

    public function simulate() {
        $mallardDuck = new QuackCounter(new MallardDuck());
        $redheadDuck = new QuackCounter(new RedheadDuck());
        $duckCall = new QuackCounter(new DuckCall());
        $rubberDuck = new QuackCounter(new RubberDuck());
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Goose Adapter", PHP_EOL;

        $this->simulator($mallardDuck);
        $this->simulator($redheadDuck);
        $this->simulator($duckCall);
        $this->simulator($rubberDuck);
        $this->simulator($gooseDuck);

        echo "The ducks quacked " . QuackCounter::getQuacks() . "times", PHP_EOL;
    }

    public function simulator(Quackable $duck) {
        $duck->quack();
    }
}

$simulator = new DuckSimulator();
$simulator->simulate();
