<?php
/**
 * @file
 * Provide views data and handlers for views_iiv module.
 */

/**
 * Implements hook_views_plugins().
 */
function views_iiv_views_plugins() {
  return array(
    'style' => array(
      'views_iiv' => array(
        'title' => t('views_iiv'),
        'handler' => 'views_plugin_style_views_iiv',
        'help' => t("Display content in views_iiv"),
        'theme' => 'views_view_views_iiv',
        'type' => 'normal',
        'path' => backdrop_get_path('module', 'views_iiv'),
        'theme path' => backdrop_get_path('module', 'views_iiv'),
        'uses row plugin' => TRUE,
        'uses row class' => TRUE,
        'uses grouping' => FALSE,
        'uses options' => TRUE,
      ),
    ),
  );
}

