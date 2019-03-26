<?php
/**
 * Class.
 */
namespace Drupal\weather\Services;

class MyWeatherServices{
    public $appid;
  public function myservice($city) {
      //Getting the config form data
    $appid = \Drupal::config('weather.settings')->get('AppID');
    // echo($appid);

    //Using Guzzle To Get The City Weather
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://samples.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$appid);
    return $response->getBody();
  }
}