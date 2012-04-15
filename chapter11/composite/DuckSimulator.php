<?php
require_once 'Quackable.class.php';
require_once 'Goose.class.php';
require_once 'GooseAdapter.class.php';
require_once 'AbstractDuckFactory.class.php';

class DuckSimulator {
    public function simulate(AbstractDuckFactory $duckFactory) {
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Goose Adapter", PHP_EOL;

        $flockOfDucks = new Flock();

        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $flockOfMallards = new Flock();

        $mallardOne = $duckFactory->createMallardDuck();
        $mallardTwo = $duckFactory->createMallardDuck();
        $mallardThree = $duckFactory->createMallardDuck();
        $mallardFour = $duckFactory->createMallardDuck();

        $flockOfMallards->add($mallardOne);
        $flockOfMallards->add($mallardTwo);
        $flockOfMallards->add($mallardThree);
        $flockOfMallards->add($mallardFour);

        $flockOfDucks->add($flockOfMallards);

        echo "\nDuck Simulator: Whole Flock Simulation", PHP_EOL;
        $this->simulator($flockOfDucks);

        echo "\nDuck Simulator: Mallard Flock Simulation", PHP_EOL;
        $this->simulator($flockOfMallards);

        echo "The ducks quacked " . QuackCounter::getQuacks() . " times", PHP_EOL;
    }

    public function simulator(Quackable $duck) {
        $duck->quack();
    }
}

$simulator = new DuckSimulator();
$duckFactory = new CountingDuckFactory();

$simulator->simulate($duckFactory);
