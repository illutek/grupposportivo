<?php

/**
 * include external css files
 */

drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' , 'external');

drupal_add_js('https://code.jquery.com/jquery-migrate-1.2.1.min.js' , 'external');

/**
 * include js files
 **/


drupal_add_js(drupal_get_path('theme', 'gruppo') . '/js/bootstrap.min.js');

drupal_add_js(drupal_get_path('theme', 'gruppo') . '/js/jquery.backstretch.min.js');

drupal_add_js(drupal_get_path('theme', 'gruppo') . '/js/custom_backstretch.js');

drupal_add_js(drupal_get_path('theme', 'gruppo') . '/js/npm.js');

drupal_add_js(drupal_get_path('theme', 'gruppo') . '/js/ie10-viewport-bug-workaround.js');