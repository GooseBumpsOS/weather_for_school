<?php


class WeatherCompiler
{
    public function getWeatherMsg(AbstractWeatherApi $weatherApi, AbstractCountryTemplate $countryTemplate)
    {
        $translator = new Translate();

        echo "Hello dear friend, today is " . (new DateTime())->format('Y-m-d H:i:s') . PHP_EOL;
        echo "---------------------------------------" . PHP_EOL;

        $countryTemp = $countryTemplate->convertToCountryStandard($weatherApi->getCelsiusTemperature());
        echo $countryTemplate->getWeatherMsg(
                $countryTemp,
                $translator->trans($weatherApi->getPlaceName(), $countryTemplate->getPlaceLang())
            ) . PHP_EOL;

        echo "---------------------------------------" . PHP_EOL;
        echo "Goodbye" . PHP_EOL;
    }
}