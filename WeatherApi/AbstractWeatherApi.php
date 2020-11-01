<?php

abstract class AbstractWeatherApi
{
    abstract protected function getTemperature(): float;

    abstract public function getCelsiusTemperature(): float;

    abstract public function getPlaceName(): string;
}