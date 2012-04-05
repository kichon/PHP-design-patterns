<?php
require_once 'Quackable.class.php';
require_once 'Goose.class.php';
require_once 'GooseAdapter.class.php';

class DuckSimulator {

    public function simulate() {
        $mallardDuck = new MallardDuck();
        $redheadDuck = new RedheadDuck();
        $duckCall = new DuckCall();
        $rubberDuck = new RubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Goose Adapter", PHP_EOL;

        $this->simulator($mallardDuck);
        $this->simulator($redheadDuck);
        $this->simulator($duckCall);
        $this->simulator($rubberDuck);
        $this->simulator($gooseDuck);
    }

    public function simulator(Quackable $duck) {
        $duck->quack();
    }
}

$simulator = new DuckSimulator();
$simulator->simulate();
