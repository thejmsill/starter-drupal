<?php


/**
 * Implements hook_preprocess_html().
 */
function basetheme_preprocess_html(&$variables, $hook) {
  $variables['themepath'] = drupal_get_path('theme', 'ua');
//
}

function basetheme_preprocess_node(&$variables) {
//
}
