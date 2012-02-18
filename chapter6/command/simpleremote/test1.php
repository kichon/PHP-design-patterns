<?php
require_once 'SimpleRemoteControl.class.php';
require_once 'Command.class.php';
require_once 'Light.class.php';
require_once 'GarageDoor.class.php';

$remote = new SimpleRemoteControl();
$light = new Light();
$garageDoor = new GarageDoor();

$lightOn = new LightOnCommand($light);
$garageOpen = new GarageDoorOpenCommand($garageDoor);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();
$remote->setCommand($garageOpen);
$remote->buttonWasPressed();
