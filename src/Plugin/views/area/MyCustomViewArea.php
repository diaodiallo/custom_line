<?php
/**
 * Created by PhpStorm.
 * User: ddiallo
 * Date: 7/22/20
 * Time: 6:23 PM
 */

namespace Drupal\custom_line\Plugin\views\area;

use Drupal\charts_api_example\Controller\ChartsApiExample;
use Drupal\views\Plugin\views\area\AreaPluginBase;
use Drupal\views\Plugin\views\Display\DisplayPluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views\ViewExecutable;
use Drupal\Core\Url;

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

    $options['data_field'] = ['default' => NULL];

    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);

    $form['data_field'] = [
      '#type' => 'textfield',
      '#title' => t('Enter the min or max value.'),
      '#default_value' => $this->options['data_field'],
      '#weight' => -10,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function render($empty = FALSE) {
//
//      $field_value = $this->options['data_field'];
//      $label = $this->options['admin_label'];
//      $message = $this->t('<p class="no-results-found">Your value is <span>"@value"</span>.</p>', ['@value' => $field_value]);
//
//    $this->options['raw_options'] = [
//      'yaxis' => [
//        'plotLines' => [
//          'value' => $field_value,
//          'color' => 'green',
//          'dashStyle' => 'shortdash',
//          'with' => 2,
//          'label' => [
//            'text' => $label,
//          ]
//        ]
//      ]
//    ];
//
//    return [
//      '#markup' => $message,
//    ];
  }

}
