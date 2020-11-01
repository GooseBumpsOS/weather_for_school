<?php


class UsaCountry extends AbstractCountryTemplate
{
    public function convertToCountryStandard(float $celsiusTemperature): float
    {
        return $celsiusTemperature * (9 / 5) + 32;
    }

    /**
     * @param float $temp
     * @return string
     */
    public function getWeatherMsg(float $temp, string $placeName): string
    {
        return $this->constructMsg($placeName) . $temp . " in Fahrenheit";
    }

    private function constructMsg(string $placeName): string
    {
        return "Hello, temperature in $placeName is: ";
    }
}