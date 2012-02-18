<?php

class Controller
{
    protected $elec;

    public function __construct($elec)
    {
        $this->elec = $elec;
    }

    public function on()
    {
        $this->elec->on();
    }

    public function off()
    {
        $this->elec->off();
    }
}
