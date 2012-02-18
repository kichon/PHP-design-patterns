<?php
//require_once 'SimpleRemoteControl.class.php';

interface Command {
    public function execute();
}

class LightOnCommand implements Command {
    protected $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->on();
    }
}

class LightOffCommand implements Command {
    protected $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->off();
    }
}

class GarageDoorOpenCommand implements Command {
    protected $garageDoor;

    public function __construct(GarageDoor $garageDoor) {
        $this->garageDoor = $garageDoor;
    }

    public function execute() {
        $this->garageDoor->up();
    }
}
