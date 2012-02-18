<?php
require 'Observer.class.php';
require 'DisplayElement.class.php';

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure) {
        $this->tempeature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display() {
        echo "現在の気象状況：温度" . $this->tempeature . "度 湿度" . $this->humidity . "%\n";
    }
}
