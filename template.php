<?php

function puzzle_preprocess_node(&$vars) {
  $vars['theme_hook_suggestions'][] = 'node__'.$vars['type'].'__'.$vars['view_mode'];
}

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

  $main_color = theme_get_setting('main_color');
  $vars['classes_array'][] = theme_get_setting('layout_style');
  $vars['classes_array'][] = theme_get_setting('main_color');
  $vars['classes_array'][] = theme_get_setting('background_color');

}
