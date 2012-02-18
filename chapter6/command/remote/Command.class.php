<?php

interface Command {
    public function execute();
}

class NoCommand implements Command {
    public function execute() { }
}

class LightOnCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->on();
    }
}

class LightOffCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->off();
    }
}

class LivingroomLightOnCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->on();
    }
}

class LivingroomLightOffCommand implements Command {
    private $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->off();
    }
}

class GarageDoorUpCommand implements Command {
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor) {
        $this->garageDoor = $garageDoor;
    }

    public function execute() {
        $this->garageDoor->up();
    }
}

class GarageDoorDownCommand implements Command {
    private $garageDoor;

    public function __construct(GarageDoor $garageDoor) {
        $this->garageDoor = $garageDoor;
    }

    public function execute() {
        $this->garageDoor->down();
    }
}

class CeilingFanOnCommand implements Command {
    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute() {
        $this->ceilingFan->high();
    }
}

class CeilingFanOffCommand implements Command {
    private $ceilingFan;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute() {
        $this->ceilingFan->off();
    }
}

class HottubOnCommand implements Command {
    private $hottub;

    public function __construct(Hottub $hottub) {
        $this->hottub = $hottub;
    }

    public function execute() {
        $this->hottub->on();
        $this->hottub->heat();
        $this->hottub->bubblesOn();
    }
}

class HottubOffCommand implements Command {
    private $hottub;

    public function __construct(Hottub $hottub) {
        $this->hottub = $hottub;
    }

    public function execute() {
        $this->hottub->cool();
        $this->hottub->off();
    }
}

class StereoOnWithCDCommand implements Command {
    private $stereo;

    public function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute() {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }
}

class StereoOffCommand implements Command {
    private $stereo;

    public function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute() {
        $this->stereo->off();
    }
}
