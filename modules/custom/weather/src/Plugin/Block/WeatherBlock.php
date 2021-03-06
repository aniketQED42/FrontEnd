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

    $options = array(
      'yes' => t('Yes'),
      'no' => t('No'), 
    );

    $form['round'] = array(
      '#title' => t('Please tick for round off values :'),
      '#type' => 'checkboxes',
      '#options' => $options,
    );
    return $form;
  }

  public function blockSubmit($form, FormStateInterface $form_state){
    
    $this->setConfigurationValue('city',$form_state->getValue('city'));
    $this->setConfigurationValue('description',$form_state->getValue('description'));
    $this->setConfigurationValue('image',$form_state->getValue('image'));
    $this->setConfigurationValue('round',$form_state->getValue('round'));       
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

    $mintmp = $result['main']['temp_min'];
    $maxtmp = $result['main']['temp_max'];
    $pressure = $result['main']['pressure'];
    $humidity = $result['main']['humidity'];
    $temp = $result['main']['temp'];

    if ($config['round']=='yes'){
      $roundedmintmp = round($mintmp);
      $roundedmaxtmp = round($maxtmp);
      $roundedpressure = round($pressure);
      $roundedhumidity = round($humidity);
      $roundedtemp = round($temp);
      return [   
        
        '#theme' => 'weather',
        '#image' => $imgpath,
        '#city' => $city,
        '#description' => $description,
        '#mintemp' => $roundedmintmp,
        '#maxtemp' => $roundedmaxtmp,
        '#pressure' => $roundedpressure,
        '#humidity' => $roundedhumidity,
        '#temp' => $roundedtemp,
    ];
  } else{   
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
    ];}
    }

}