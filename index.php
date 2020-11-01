<?php

spl_autoload_register(static function ($className) {
    //class directories
    $directories = array(
        'CountryTemplate/',
        'CountryTemplate/Abstraction/',
        'WeatherApi/',
        'Translate/',
        ''
    );
    //for each directory
    foreach ($directories as $directory) {
        if (file_exists($directory . $className . '.php')) {
            require_once($directory . $className . '.php');
            return;
        }
    }
});

$weatherCompiler = new WeatherCompiler();
$weatherCompiler->getWeatherMsg(new RussiaWeatherApi(), new RusCountry());


