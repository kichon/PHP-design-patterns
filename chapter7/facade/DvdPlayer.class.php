<?php

class DvdPlayer {
    private $description;
    private $currentTrack;
    private $amplifier;
    private $movie;

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
        $this->movie = null;
        echo $this->description." eject", PHP_EOL;
    }

    public function play1($movie) {
        $this->movie = $movie;
        $this->currentTrack = 0;
        echo $this->description." playing \"".$movie."\"", PHP_EOL;
    }

    public function play2($track) {
        if (is_null($this->movie)) {
            echo $this->description." can't play track ".$track.", no dvd inserted", PHP_EOL;
        } else {
            $this->currentTrack = $track;
            echo $this->description." playing track ".$this->currentTrack, PHP_EOL;
        }
    }

    public function stop() {
        $this->currentTrack = 0;
        echo $this->description." stopped \"".$this->movie."\"", PHP_EOL;
    }

    public function pause() {
        echo $this->description." paused \"".$this->movie."\"", PHP_EOL;
    }

    public function setSurroundAudio() {
        echo $this->description." set surround audio", PHP_EOL;
    }

    public function __toString() {
        return $this->description;
    }
}
