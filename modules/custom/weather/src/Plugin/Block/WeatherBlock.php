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
  public function build() {  
      
        $servicedata = \Drupal::service('myweatherservice');
        $data = $servicedata->myservice();
        $result = Json::decode($data);
        print_r($result);
        
        
               
    $form['temp_min'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Min Tempreture: '),
    ];
    $form['temp_max'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Max Tempreture: '),
    ];
    $form['pressure'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Pressure: '),
    ];
    $form['humidity'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Humidity: '),
    ];
    $form['wind -> speed'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Wind Speed: '),
    ];
    return $form;
      
    
  }

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
        '#title' => $this->t('Upload Image:'),
    ];
    
    return $form;
  }

}