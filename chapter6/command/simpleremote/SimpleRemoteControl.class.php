<?php
require_once 'Command.class.php';

class SimpleRemoteControl {
    private $slot;

    public function __construct() {}

    public function setCommand(Command $command) {
        $this->slot = $command;
    }

    public function buttonWasPressed() {
        $this->slot->execute();
    }
}
