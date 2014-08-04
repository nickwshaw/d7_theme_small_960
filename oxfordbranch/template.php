<?php
include_once('theme_function_overides.php');

function oxfordbranch_preprocess_page(&$vars, $hook) {
	//krumo($vars);
}







/**
 * Preprocesses the wrapping HTML.
 * @param array &$vars - Template variables.
 */
function oxfordbranch_preprocess_html(&$vars) {
  //add google fonts style sheet
  //<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  $element = array(
    '#tag' => 'link', // The #tag is the html tag - <link />
    '#attributes' => array( // Set up an array of attributes inside the tag
      'href' => 'http://fonts.googleapis.com/css?family=Lato', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
    ),
  );
  drupal_add_html_head($element, 'google_font_lato');
}