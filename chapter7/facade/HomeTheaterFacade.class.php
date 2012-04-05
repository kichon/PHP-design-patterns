<?php

class HomeTheaterFacade
{
    private $amp;
    private $tuner;
    private $cd;
    private $dvd;
    private $projector;
    private $lights;
    private $screen;
    private $popper;

    public function __construct(Amplifier $amp,
                        Tuner $tuner,
                        DvdPlayer $dvd,
                        CdPlayer $cd,
                        Projector $projector,
                        Screen $screen,
                        TheaterLights $lights,
                        PopcornPopper $popper) {
        
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }

    public function watchMovie($movie) {
        echo "Get ready to watch a movie...", PHP_EOL;
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play1($movie);
    }

    public function endMovie() {
        echo "Shutting movie theater down...", PHP_EOL;
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }

    public function listenToCd($cdTitle) {
        echo "Get ready for an audiopile experence...", PHP_EOL;
        $this->lights->on();
        $this->amp->on();
        $this->amp->setColume(5);
        $this->amp->setCd($this->cd);
        $this->amp->setStereoSound();
        $this->cd->on();
        $this->cd->play1($cdTitle);
    }

    public function endCd() {
        echo "Shutting down CD...", PHP_EOL;
        $this->amp->off();
        $this->amp->setCd($this->cd);
        $this->cd->eject();
        $this->cd->off();
    }

    public function listenToRadio($frequency) {
        echo "Tuning in toe airwaves...", PHP_EOL;
        $this->tuner->on();
        $this->tuner->setFrequency($frequency);
        $this->amp->on();
        $this->amp->setColume(5);
        $this->amp->setTuner($this->tuner);
    }

    public function endRadio() {
        echo "Shutting down the tuner...", PHP_EOL;
        $this->tuner->off();
        $this->amp->off();
    }
}
