<?php

interface FlyBehavior
{
    public function fly();
}

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo '飛んでいます!!', PHP_EOL;
    }
}

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo '飛べません', PHP_EOL;
    }
}
