<?php

/**
 * @file
 * Contains the views_b4 style plugin.
 */

class views_plugin_style_views_iiv extends views_plugin_style {

  /**
   * Set default options
   */
  // function options(&$options) {
    // parent::options($options);


function option_definition() {
    $options = parent::option_definition();
    $options['layout_type'] = array('default' => 'one_two_container');
    return $options;
  }

  /**
   * Render the given style.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $form['layout_type'] = array(
      '#type' => 'radios',
      '#title' => t('Layout Type'),
      '#options' => array('one_three_container' => t('One then Three columns'), 'one_two_container' => t('One then Two columns'), 'two_three_container' => t('Two then Three columns'), 'two_container' => t('Two columns'), 'three_container' => t('Three columns'), 'four_container' => t('Four columns')),
      '#default_value' => $this->options['layout_type'],
      '#description' => t('Using this format will print out this View in a markup format just like the core Backdrop.'),
    );

  }

}
