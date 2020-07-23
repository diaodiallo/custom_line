<?php
/**
 * Created by PhpStorm.
 * User: ddiallo
 * Date: 7/22/20
 * Time: 6:44 PM
 */


/**
 * Implements hook_views_data().
 */
function custom_line_views_data() {
  $data['views']['my_custom_view_area'] = [
    'title' => t('My custom views area'),
    'help' => t('Provide custom min/max/target fields.'),
    'area' => [
      'id' => 'my_custom_view_area',
    ],
  ];

  return $data;
}