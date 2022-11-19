<?php

namespace Drupal\manba_core\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class SiteSettingsForm.
 */
class SiteSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'manba_core.sites.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'site_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('manba_core.sites.settings');

    $form['site_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Site Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    ];
    $form['site_settings']['twitter'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Twitter'),
      '#default_value' => $config->get('twitter'),
    ];
    $form['site_settings']['instagram'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Instagram'),
      '#default_value' => $config->get('instagram'),
    ];
    $form['site_settings']['youtube'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Youtube'),
      '#default_value' => $config->get('youtube'),
    ];
    $form['site_settings']['linkedin'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Linkedin'),
      '#default_value' => $config->get('linkedin'),
    ];

    $form['site_settings']['address_ar'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Address (ar)'),
      '#default_value' => $config->get('address_ar'),
    ];
    $form['site_settings']['address_en'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Address (en)'),
      '#default_value' => $config->get('address_en'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $config = $this->configFactory->getEditable('manba_core.sites.settings');

    $config
      ->set('twitter', $form_state->getValue('twitter'))
      ->save();

    $config
      ->set('instagram', $form_state->getValue('instagram'))
      ->save();

    $config
      ->set('youtube', $form_state->getValue('youtube'))
      ->save();

    $config
      ->set('linkedin', $form_state->getValue('linkedin'))
      ->save();

    $config
      ->set('address_ar', $form_state->getValue('address_ar'))
      ->save();

    $config
      ->set('address_en', $form_state->getValue('address_en'))
      ->save();

    $config
      ->set('directions', $form_state->getValue('directions'))
      ->save();

    parent::submitForm($form, $form_state);

    $this->config('manba_core.sites.settings')
      ->save();
  }

}
