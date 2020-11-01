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

    /**
     * @return string
     */
    public function getPlaceLang(): string
    {
        return LangEnum::ENG;
    }

    /**
     * @param string $placeName
     * @return string
     */
    private function constructMsg(string $placeName): string
    {
        return "Hello, temperature in $placeName is: ";
    }
}