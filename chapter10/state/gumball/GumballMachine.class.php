<?php

class GumballMachine {
    const SOLD_OUT = 0;
    const NO_QUARTER = 1;
    const HAS_QUARTER = 2;
    const SOLD = 3;

    private $state = SOLD_OUT;
    private $count = 0;

    public function __construct($count) {
        $this->count = $count;
        if ($count > 0) {
            $this->state = NO_QUARTER;
        }
    }

    public function insertQuarter() {
        switch ($this->state) {
        case HAS_QUARTER:
            echo "You can't insert another quarter", PHP_EOL;
            break;
        case NO_QUARTER:
            $this->state = HAS_QUARTER;
            echo "You inserted a quarter", PHP_EOL;
            break;
        case SOLD_OUT:
            echo "You can't insert a quarter, the machine is sold out", PHP_EOL;
            break;
        case SOLD:
            echo "Please wait, we're already giving you a gumball", PHP_EOL;
            break;
        }
    }

    public function ejectQuarter() {
        switch ($this->state) {
        case HAS_QUARTER:
            echo "Quarter returned", PHP_EOL;
            $this->state = NO_QUARTER;
            break;
        case NO_QUARTER:
            echo "You haven't inserted a quarter", PHP_EOL;
            break;
        case SOLD:
            echo "Sorry, you already turned the crank", PHP_EOL;
            break;
        case SOLD_OUT:
            echo "You can't eject, you haven't inserted a quarter yet", PHP_EOL;
            break;
        }
    }

    public function turnCrank() {
        switch ($this->state) {
        case SOLD:
            echo "Turnig twice doesn't get you anaother gumball!", PHP_EOL;
            break;
        case NO_QUARTER:
            echo "You turned but there's no quarter", PHP_EOL;
            break;
        case SOLD_OUT:
            echo "You turned, but there are no gumballs", PHP_EOL;
            break;
        case HAS_QUARTER:
            echo "You turned...";
            $this->state = SOLD;
            $this->dispense();
            break;
        }
    }

    public function dispense() {
        switch ($this->state) {
        case SOLD:
            echo "A gumball comes rolling out the slot", PHP_EOL;
            $this->count -= 1;
            if ($this->count <= 0) {
                echo "Oops, out of gumballs!", PHP_EOL;
                $this->state = SOLD_OUT;
            } else {
                $this->state = NO_QUARTER;
            }
            break;
        case NO_QUARTER:
            echo "You need to pay first", PHP_EOL;
            break;
        case SOLD_OUT:
            echo "No gumball dispensed", PHP_EOL;
            break;
        case HAS_QUARTER:
            echo "No gumball dispensed", PHP_EOL;
            break;
        }
    }

    public function refill($numGumBalls) {
        $this->count = $numGumBalls;
        $this->state = NO_QUARTER;
    }

    public function __toString() {
        $result = "\nMighty Gumball, Inc.";
        $result .= "\nJava-enabled Standing Gumball Model #2004\n";
        $result .= "Inventory: " . $this->count . " gumball";

        if ($this->count != 1) {
            $result  .= "s";
        }

        $result .= "\nMachine is ";
        switch ($this->state) {
        case SOLD_OUT:
            $result .= "sold out";
            break;
        case NO_QUARTER:
            $result .= "waiting for quarter";
            break;
        case HAS_QUARTER:
            $result .= "waiting for turn of crank";
            break;
        case SOLD:
            $result .= "delivering a gumball";
            break;
        }
        $result .= "\n";
        return $result;
    }
}
