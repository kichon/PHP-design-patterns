<?php

interface Turkey {
    public function gobble();
    public function fly();
}

class WildTurkey implements Turkey {
    public function gobble() {
        echo "Gobble gobble", PHP_EOL;
    }

    public function fly() {
        echo "I'm flying a short distance", PHP_EOL;
    }
}
