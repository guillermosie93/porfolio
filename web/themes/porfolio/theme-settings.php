<?php

/**
 * @file
 * Theme settings form for porfolio theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function porfolio_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['porfolio'] = [
    '#type' => 'details',
    '#title' => t('porfolio'),
    '#open' => TRUE,
  ];

  $form['porfolio']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
