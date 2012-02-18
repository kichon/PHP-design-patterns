<?php

abstract class Beverage {
    public $description = "不明な飲み物";

    public function getDescription() {
        return $this->description;
    }

    abstract public function cost();
}

class Espresso extends Beverage {

    public function __construct()
    {
        $this->description = "エスプレッソ";
    }

    public function cost()
    {
        return 1.99;
    }
}

class HouseBlend extends Beverage {

    public function __construct()
    {
        $this->description = "ハウスブレンドコーヒー";
    }

    public function cost()
    {
        return 0.89;
    }
}

class DarkRoast extends Beverage {
    public function __construct()
    {
        $this->description = "ダークロスト";
    }

    public function cost()
    {
        return 0.89;
    }

}
