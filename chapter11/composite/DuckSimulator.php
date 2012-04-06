<?php
require_once 'Quackable.class.php';
require_once 'Goose.class.php';
require_once 'GooseAdapter.class.php';
require_once 'AbstractDuckFactory.class.php';

class DuckSimulator {
    public function simulate(AbstractDuckFactory $duckFactory) {
        $mallardDuck = $duckFactory->createMallardDuck();
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Goose Adapter", PHP_EOL;

        $this->simulator($mallardDuck);
        $this->simulator($redheadDuck);
        $this->simulator($duckCall);
        $this->simulator($rubberDuck);
        $this->simulator($gooseDuck);

        echo "The ducks quacked " . QuackCounter::getQuacks() . " times", PHP_EOL;
    }

    public function simulator(Quackable $duck) {
        $duck->quack();
    }
}

$simulator = new DuckSimulator();
$duckFactory = new CountingDuckFactory();

$simulator->simulate($duckFactory);
