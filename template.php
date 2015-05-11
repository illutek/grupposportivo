<?php

/**
 * include external js files
 */

function gruppo_preprocess_html(&$variables){
    // drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'external');
    drupal_add_js('https://code.jquery.com/jquery-migrate-1.2.1.min.js', 'external');
}