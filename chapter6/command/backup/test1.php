<?php
require_once 'Controller.class.php';
require_once 'Light.class.php';

$ctrl = new Controller(new Light());

$ctrl->on();
$ctrl->off();
