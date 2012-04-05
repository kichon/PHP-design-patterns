<?php

interface State {
    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();
}

class NoQuarterState implements State {
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "You inserted a quarter", PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter() {
        echo "You haven't inserted a quarter", PHP_EOL;
    }

    public function turnCrank() {
        echo "You turned, but there's no quarter", PHP_EOL;
    }

    public function dispense() {
        echo "You need to pay first", PHP_EOL;
    }

    public function __toString() {
        return "waiting for quarter";
    }
}

class HasQuarterState implements State {
    protected $randomWinner;
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "You can't insert another quarter", PHP_EOL;
    }

    public function ejectQuarter() {
        echo "Quarter returned", PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank() {
        echo "You turned...", PHP_EOL;
        $winner = srand(10);
        if (($winner == 0) && ($this->gumballMachine->getCount() > 1)) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense() {
        echo "No gumball dispensed", PHP_EOL;
    }

    public function __toString() {
        return "waiting for turn of crank";
    }
}

class SoldState implements State {
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->GumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "Please wait, we're already giving you a gumball", PHP_EOL;
    }

    public function ejectQuarter() {
        echo "Sorry, you already turned the crank", PHP_EOL;
    }

    public function turnCrank() {
        echo "Turning twice doesn't get you another gumball!", PHP_EOL;
    }

    public function dispense() {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs!", PHP_EOL;
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    public function __toString() {
        return "dispensing a gumball";
    }
}

class SoldOutState implements State {
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->GumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "You can't insert a quarter, the machine is out", PHP_EOL;
    }

    public function ejectQuarter() {
        echo "You can't eject, you haven't inserted a quarter yet", PHP_EOL;
    }

    public function turnCrank() {
        echo "You turned, but there are no gumballs", PHP_EOL;
    }

    public function dispense() {
        echo "No gumball dispensed", PHP_EOL;
    }

    public function __toString() {
        return "sold out";
    }
}

class WinnerState implements State {
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "Please wait, we're already giving you a Gumball", PHP_EOL;
    }

    public function ejectQuarter() {
        echo "Please wait, we're already giving you a Gumball", PHP_EOL;
    }

    public function turnCrank() {
        echo "Turning again doesn't get you another gumball!", PHP_EOL;
    }

    public function dispense() {
        echo "YOU'RE WINNER! You get two gumballs for your quarter", PHP_EOL;
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "Oops, out of gumballs!", PHP_EOL;
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }
}
