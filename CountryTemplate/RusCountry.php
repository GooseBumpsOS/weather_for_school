<?php


class RusCountry extends AbstractCountryTemplate
{
    /**
     * @param float $celsiusTemperature
     * @return float
     */
    public function convertToCountryStandard(float $celsiusTemperature): float
    {
        return $celsiusTemperature;
    }

    /**
     * @param float $temp
     * @param string $placeName
     * @return string
     */
    public function getWeatherMsg(float $temp, string $placeName): string
    {
        return $this->constructMsg($placeName) . $temp . " градуосв цельсия";
    }

    public function getPlaceLang(): string
    {
        return LangEnum::RUS;
    }

    /**
     * @param string $placeName
     * @return string
     */
    private function constructMsg(string $placeName): string
    {
        return "Привет, погода в {$placeName} сейчас такая: ";
    }
}