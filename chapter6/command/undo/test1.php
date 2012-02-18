<?php
require_once 'Command.class.php';
require_once 'RemoteControlWithUndo.class.php';
require_once 'Light.class.php';
require_once 'CeilingFan.class.php';

$remoteControl = new RemoteControlWithUndo();

$livingRoomLight = new Light("Living Room");

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);

$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();
$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();


$ceilingFan = new CeilingFan("Living Room");

$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$remoteControl->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
$remoteControl->setCommand(1, $ceilingFanHigh, $ceilingFanOff);

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();
$remoteControl->onButtonWasPushed(1);
$remoteControl->undoButtonWasPushed();


/*
$kitchenLight = new Light("Kitchen");
$garageDoor = new GarageDoor('');
$stereo = new Stereo("Living Room");

$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);

$ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$garageDoorUp = new GarageDoorUpCommand($garageDoor);
$garageDoorDown = new GarageDoorDownCommand($garageDoor);

$stereoOnWithCD = new StereoOnWithCDCommand($stereo);
$stereoOff = new StereoOffCommand($stereo);


$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remoteControl->setCommand(2, $ceilingFanOn, $ceilingFanOff);
$remoteControl->setCommand(3, $stereoOnWithCD, $stereoOff);


$remoteControl->onButtonWasPushed(1);
$remoteControl->offButtonWasPushed(1);
$remoteControl->onButtonWasPushed(2);
$remoteControl->offButtonWasPushed(2);
$remoteControl->onButtonWasPushed(3);
$remoteControl->offButtonWasPushed(3);
*/
