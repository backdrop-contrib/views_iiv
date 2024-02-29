<?php
/**
 * @file
 * Provide views data and handlers for views_iiv module.
 */

/**
 * Implements hook_views_plugins().
 */
function views_iiv_views_plugins() {
  $base_path = backdrop_get_path('module', 'views_iiv');
  $plugins['style']['views_iiv'] = array(
    'title' => t('views_iiv'),
    'help' => t('Display content in views_iiv'),
    'handler' => 'views_plugin_style_views_iiv',
    'theme' => 'views_view_views_iiv',
    'theme path' => $base_path . '/views',
    'uses row plugin' => TRUE,
    'uses row class' => TRUE,
    'uses grouping' => FALSE,
    'uses options' => TRUE,
    'type' => 'normal',
  );
  return $plugins;
}

