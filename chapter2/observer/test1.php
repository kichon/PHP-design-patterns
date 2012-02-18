<?php
require 'WeatherData.class.php';
require 'CurrentConditionsDisplay.class.php';

$weatherData = new WeatherData();

$observer1 = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(1, 10, 100);
$weatherData->setMeasurements(5, 20, 105);
$weatherData->setMeasurements(10, 30, 130);
