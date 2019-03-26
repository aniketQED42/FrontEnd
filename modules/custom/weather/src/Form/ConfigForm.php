<?php
namespace Drupal\weather\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class ConfigForm extends ConfigFormBase {
    /** @var string Config settings */
  const SETTINGS = 'weather.settings';

  /** 
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'weather_admin_settings';
  }

  /** 
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /** 
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config(static::SETTINGS);

    // $form['weather_thing'] = [
    //   '#type' => 'textfield',
    //   '#title' => $this->t('Things'),
    //   '#default_value' => $config->get('weather_thing'),
    // ];  

    $form['AppID'] = [
      '#type' => 'textfield',
      '#title' => $this->t('AppID'),
      '#default_value' => $config->get('AppID'),
    ];  

    return parent::buildForm($form, $form_state);
  }

  /** 
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
      // Retrieve the configuration
       $this->configFactory->getEditable(static::SETTINGS)
      // Set the submitted configuration setting
    //   ->set('example_thing', $form_state->getValue('example_thing'))
      // You can set multiple configurations at once by making
      // multiple calls to set()
      ->set('AppID', $form_state->getValue('AppID'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
?>