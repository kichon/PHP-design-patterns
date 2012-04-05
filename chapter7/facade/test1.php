<?php
require_once 'Amplifier.class.php';
require_once 'Tuner.class.php';
require_once 'DvdPlayer.class.php';
require_once 'CdPlayer.class.php';
require_once 'Projector.class.php';
require_once 'TheaterLights.class.php';
require_once 'Screen.class.php';
require_once 'PopcornPopper.class.php';
require_once 'HomeTheaterFacade.class.php';


$amp = new Amplifier("Top-O-Line Amplifier");
$tuner = new Tuner("Top-O-Line AM/FM Tuner", $amp);
$dvd = new DvdPlayer("Top-O-Line DVD Player", $amp);
$cd = new CdPlayer("Top-O-Line CD Player", $amp);
$projector = new Projector("Top-O-Line Projector", $dvd);
$lights = new TheaterLights("Theater Ceiling Lights");
$screen = new Screen("Theater Screen");
$popper = new PopcornPopper("Popcorn Popper");

$homeTheater = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $screen, $lights, $popper);

$homeTheater->watchMovie("Raiders of the Lost Ark");
$homeTheater->endMovie();
