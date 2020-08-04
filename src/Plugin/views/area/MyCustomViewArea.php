<?php
/**
 * Created by PhpStorm.
 * User: ddiallo
 * Date: 7/22/20
 * Time: 6:23 PM
 */

namespace Drupal\custom_line\Plugin\views\area;

use Drupal\views\Plugin\views\area\AreaPluginBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a Plugin to custom min/max/target fields.
 *
 * @see \Drupal\views\Plugin\views\area\AreaPluginBase
 *
 * @ingroup views_area_handlers
 *
 * @ViewsArea("my_custom_view_area")
 */
class MyCustomViewArea extends AreaPluginBase {

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();

    $options['min']['data_min'] = ['default' => NULL];
    $options['max']['data_max'] = ['default' => NULL];
    $options['dash_style'] = ['default' => NULL];
    $options['min']['min_color'] = ['default' => NULL];
    $options['max']['max_color'] = ['default' => NULL];
    $options['min']['min_label'] = ['default' => NULL];
    $options['max']['max_label'] = ['default' => NULL];

    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    $colorOptions = [
      'green' => 'Green',
      'red' => 'Red',
      'blue' => 'Blue',
      'yellow' => 'Yellow',
    ];

    $dashStylesOptions = [
      'Solid' => 'Solid',
      'ShortDash' => 'ShortDash',
      'ShortDot' => 'ShortDot',
      'ShortDashDot' => 'ShortDashDot',
      'ShortDashDotDot' => 'ShortDashDotDot',
      'Dot' => 'Dot',
      'Dash' => 'Dash',
      'LongDash' => 'LongDash',
      'DashDot' => 'DashDot',
      'LongDashDot' => 'LongDashDot',
      'LongDashDotDot' => 'LongDashDotDot',
    ];

    $form['min'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Min options'),
    );

     $form['min']['data_min'] = [
       '#type' => 'textfield',
       '#title' => t('Enter the min value.'),
       '#size' => 20,
       '#maxlength' => 20,
       '#default_value' => $this->options['min']['data_min'],
     ];

    $form['min']['min_label'] = [
      '#type' => 'textfield',
      '#title' => t('Enter the min label.'),
      '#size' => 30,
      '#maxlength' => 30,
      '#default_value' => $this->options['min']['min_label'],
    ];

     $form['min']['min_color'] = array(
       '#type' => 'select',
       '#title' => $this->t('Min color'),
       '#description' => $this->t('Please choose the color of the min line.'),
       '#options' => $colorOptions,
       '#default_value' => $this->options['min']['min_color'],
     );

    $form['max'] = array(
      '#type' => 'fieldset',
      '#title' => $this->t('Max options'),
    );

    $form['max']['data_max'] = [
      '#type' => 'textfield',
      '#title' => t('Enter the max value.'),
      '#size' => 20,
      '#maxlength' => 20,
      '#default_value' => $this->options['max']['data_max'],
      '#weight' => -11,
    ];

    $form['max']['max_label'] = [
      '#type' => 'textfield',
      '#title' => t('Enter the max label.'),
      '#size' => 30,
      '#maxlength' => 30,
      '#default_value' => $this->options['max']['max_label'],
      '#weight' => -10,
    ];

    $form['max']['max_color'] = array(
      '#type' => 'select',
      '#title' => $this->t('Max color'),
      '#description' => $this->t('Please choose the color of the max line.'),
      '#options' => $colorOptions,
      '#default_value' => $this->options['max']['max_color'],
    );

    $form['dash_style'] = array(
      '#type' => 'select',
      '#title' => $this->t('Dash style lines.'),
      '#description' => $this->t('Please select the dash style.'),
      '#options' => $dashStylesOptions,
      '#default_value' => $this->options['dash_style'],
    );

  }

  /**
   * {@inheritdoc}
   */
  public function render($empty = FALSE) {
  }

}
