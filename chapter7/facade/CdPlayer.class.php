<?php

class CdPlayer {
    private $description;
    private $currentTrack;
    private $amplifier;
    private $title;

    public function __construct($description, Amplifier $amplifier) {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function on() {
        echo $this->description." on", PHP_EOL;
    }

    public function off() {
        echo $this->description." off", PHP_EOL;
    }

    public function eject() {
        $this->title = null;
        echo $this->description." eject", PHP_EOL;
    }

    public function play1($title) {
        $this->title = $title;
        $this->currentTrack = 0;
        echo $this->description." playing \"".$title."\"", PHP_EOL;
    }

    public function play2($track) {
        if (is_null($this->title)) {
            echo $this->description." can't play track ".$this->currentTrack.", no cd inserted", PHP_EOL;
        } else {
            $this->currentTrack = $track;
            echo $this->description." playing track ".$this->currentTrack, PHP_EOL;
        }
    }

    public function stop() {
        $this->currentTrack = 0;
        echo $this->description." stopped", PHP_EOL;
    }

    public function pause() {
        echo $this->description." paused \"".$this->title."\"", PHP_EOL;
    }

    public function __toString() {
        return $this->description;
    }
}
