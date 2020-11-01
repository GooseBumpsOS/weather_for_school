<?php


class RussiaWeatherApi extends AbstractWeatherApi
{
    protected function getTemperature(): float
    {
        try {
            return random_int(-30, 30) + (random_int(0, 10) / 10);
        } catch (Exception $e) {
            echo "Smth wrong with random_int function, use rand() instead. Error msg is " . $e->getMessage();

            return mt_rand(-30, 30) + (mt_rand(0, 10) / 10);
        }
    }

    public function getCelsiusTemperature(): float
    {
        return $this->getTemperature();
    }

    public function getPlaceName(): string
    {
        return "Russia";
    }
}