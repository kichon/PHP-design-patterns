<?php

interface Command {
    public function execute();
    public function undo();
}

class NoCommand implements Command {
    public function execute() { }
    public function undo() { }
}

class LightOnCommand implements Command {
    private $light;
    private $level;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->level = $this->light->getLevel();
        $this->light->on();
    }

    public function undo() {
        $this->light->dim($this->level);
    }
}

class LightOffCommand implements Command {
    private $light;
    private $level;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->level = $this->light->getLevel();
        $this->light->off();
    }

    public function undo() {
        $this->light->dim($this->level);
    }
}

class DimmerLightOnCommand implements Command {
    private $light;
    private $prevLevel;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->prevLevel = $this->light->getLevel();
        $this->light->dim(75);
    }

    public function undo() {
        $this->light->dim($this->prevLevel);
    }
}

class DimmerLightOffCommand implements Command {
    private $light;
    private $prevLevel;

    public function __construct(Light $light) {
        $this->light = $light;
        $this->prevLevel = 100;
    }

    public function execute() {
        $this->prevLevel = $this->light->getLevel();
        $this->light->off();
    }

    public function undo() {
        $this->light->dim($this->prevLevel);
    }
}

/*
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
*/

/*
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
*/

/*
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
*/

class CeilingFanHighCommand implements Command {
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute() {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->high();
    }

    public function undo() {
        switch ($this->prevSpeed) {
        case (CeilingFan::HIGH):
            $this->ceilingFan->high();
            break;
        case (CeilingFan::MEDIUM):
            $this->ceilingFan->medium();
            break;
        case (CeilingFan::LOW):
            $this->ceilingFan->low();
            break;
        case (CeilingFan::OFF):
            $this->ceilingFan->off();
            break;
        }
    }
}
class CeilingFanMediumCommand implements Command {
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute() {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->medium();
    }

    public function undo() {
        switch ($this->prevSpeed) {
        case (CeilingFan::HIGH):
            $this->ceilingFan->high();
            break;
        case (CeilingFan::MEDIUM):
            $this->ceilingFan->medium();
            break;
        case (CeilingFan::LOW):
            $this->ceilingFan->low();
            break;
        case (CeilingFan::OFF):
            $this->ceilingFan->off();
            break;
        }
    }
}
class CeilingFanLowCommand implements Command {
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute() {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->low();
    }

    public function undo() {
        switch ($this->prevSpeed) {
        case (CeilingFan::HIGH):
            $this->ceilingFan->high();
            break;
        case (CeilingFan::MEDIUM):
            $this->ceilingFan->medium();
            break;
        case (CeilingFan::LOW):
            $this->ceilingFan->low();
            break;
        case (CeilingFan::OFF):
            $this->ceilingFan->off();
            break;
        }
    }
}

class CeilingFanOffCommand implements Command {
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute() {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->off();
    }

    public function undo() {
        switch ($this->prevSpeed) {
        case (CeilingFan::HIGH):
            $this->ceilingFan->high();
            break;
        case (CeilingFan::MEDIUM):
            $this->ceilingFan->medium();
            break;
        case (CeilingFan::LOW):
            $this->ceilingFan->low();
            break;
        case (CeilingFan::OFF):
            $this->ceilingFan->off();
            break;
        }
    }
}


/*
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
*/

/*
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
*/
