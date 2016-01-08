<?php

function puzzle_css_alter(&$css) {

  $system_css = array(
    //'modules/system/system.theme.css',
    'modules/system/system.menus.css',
    //'modules/system/system.base.css'
    );

  foreach ($system_css as $system_css_item) {
    if (isset($css[$system_css_item])) {
      unset($css[$system_css_item]);
    }
  }
}

function puzzle_preprocess_html(&$vars) {
  $viewport = array(
   '#tag' => 'meta',
   '#attributes' => array(
     'name' => 'viewport',
     'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
   ),
  );
  drupal_add_html_head($viewport, 'viewport');
}
