<?php


interface ITemperatureConverter
{
    /**
     * This method should return country temperature, like celsius
     * @param float $celsiusTemperature
     * @return float
     */
    public function convertToCountryStandard(float $celsiusTemperature): float;
}