<?php

class Amplifier
{
    private $description;
    private $tuner;
    private $dvd;
    private $cd;

    public function __construct($description) {
        $this->description = $description;
    }

    public function on() {
        echo $this->description." on", PHP_EOL;
    }

    public function off() {
        echo $this->description." off", PHP_EOL;
    }

    public function setStereoSound() {
        echo $this->description." stereo mode on", PHP_EOL;
    }

    public function setSurroundSound() {
        echo $this->description." surround sound on (5 speakers, 1 subwoofer)", PHP_EOL;
    }

    public function setVolume($level) {
        echo $this->description." setting volume to ".$level, PHP_EOL;
    }

    public function setTuner(Tuner $tuner) {
        echo $this->description." setting tuner to ".$this->dvd, PHP_EOL;
        $this->tuner = $tuner;
    }

    public function setDvd(DvdPlayer $dvd) {
        echo $this->description." setting DVD player to ".$dvd, PHP_EOL;
        $this->dvd = $dvd;
    }

    public function setCd(CdPlayer $cd) {
        echo $this->description." setting CD player to ".$cd, PHP_EOL;
        $this->cd = $cd;
    }

    public function __toString() {
        return $this->description;
    }
}
