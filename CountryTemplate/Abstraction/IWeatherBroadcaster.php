<?php


interface IWeatherBroadcaster
{
    public function getWeatherMsg(float $temp, string $placeName): string;
}