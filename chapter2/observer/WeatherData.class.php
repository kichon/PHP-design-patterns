<?php
require 'Subject.class.php';

class WeatherData implements Subject
{
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerObserver(Observer $o) {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o) {
        foreach ($this->observers as $k=>$v) {
            if ($o === $v) {
                array_splice($this->observers, $k);
            }
        }
    }

    // observersに通知する
    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    // データが更新されたら呼び出される
    public function  measurementsChanged() {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}
