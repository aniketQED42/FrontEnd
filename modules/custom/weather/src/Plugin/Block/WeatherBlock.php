<?php

namespace Drupal\weather\Plugin\Block;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Block\BlockBase;
use Drupal\Component\Serialization\Json;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "weather_block",
 *   admin_label = @Translation("London"),
 *   category = @Translation("Weather World"),
 * )
 */
class WeatherBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */ 

  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    $form['city'] = [
        '#type' => 'textfield',
        '#title' => $this->t('City:'),
    ];

    $form['description'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Description:'),
    ];

    $form['image'] = [
        '#type' => 'managed_file',
        '#upload_location' => 'public://upload/myimage',
        '#title' => $this->t('Upload Image:'),

    ];
    
    return $form;
  }

  public function blockSubmit($form, FormStateInterface $form_state){
    
    $this->setConfigurationValue('city',$form_state->getValue('city'));
    $this->setConfigurationValue('description',$form_state->getValue('description'));
    $this->setConfigurationValue('image',$form_state->getValue('image'));

    
      
  }

  public function build() {
    $servicedata = \Drupal::service('myweatherservice');   
    $data = $servicedata->myservice($city);
    $result = Json::decode($data);
    $config = $this->getConfiguration();
    $city = ($config['city']);
    $description = ($config['description']);
    $image = ($config['image']);
    $img = \Drupal\file\Entity\File::load($image[0]);
    $imgpath = $img->getFileUri();

    return [
        '#theme' => 'weather',
        '#image' => $imgpath,
        '#city' => $city,
        '#description' => $description,
        '#mintemp' => $result['main']['temp_min'],
        '#maxtemp' => $result['main']['temp_max'],
        '#pressure' => $result['main']['pressure'],
        '#humidity' => $result['main']['humidity'],
        '#temp' => $result['main']['temp']
    ];
   
   

      

    //    print_r($result);
      // print_r("Min Temp : ".$result['main']['temp_min']);
      // print_r("Max Temp : ".$result['main']['temp_max']);
      // print_r("Pressure : ".$result['main']['pressure']);
      // print_r("Humidity : ".$result['main']['humidity']);  
    }

}