<?php

class TV
{
    private $location; 
    private $channel;

    public function __construct($location) {
        $this->location = $location;
    }

    public function on() {
        echo "TV is on", PHP_EOL;
    }

    public function off() {
        echo "TV is off", PHP_EOL;
    }

    public function setInputChannel() {
        $this->channel = 3;
        echo "Channel is set for VCR", PHP_EOL;
    }
}
