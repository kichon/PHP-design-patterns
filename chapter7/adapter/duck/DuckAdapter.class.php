<?php
require_once 'Turkey.class.php';

class DuckAdapter implements Turkey {
    private $duck;
    private $rand;

    public function __construct(Duck $duck) {
        $this->duck = $duck;
    }

    public function gobble() {
        $this->duck->quack();
    }

    public function fly() {
        if (rand(0, 5) == 0) {
            $this->duck->fly();
        }
    }
}
