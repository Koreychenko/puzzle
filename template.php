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

  $puzzle_font_color = theme_get_setting('puzzle_font_color');
  $puzzle_header_color = theme_get_setting('puzzle_header_color');
  $puzzle_main_color = theme_get_setting('puzzle_main_color');
  $puzzle_link_color = theme_get_setting('puzzle_link_color');
  $puzzle_site_back_color = theme_get_setting('puzzle_site_back_color');
  $puzzle_site_content_color = theme_get_setting('puzzle_site_content_color');
  $puzzle_site_footer_color = theme_get_setting('puzzle_site_footer_color');
  $puzzle_menu_link_color = theme_get_setting('puzzle_menu_link_color');
  $puzzle_site_footer_text_color = theme_get_setting('puzzle_site_footer_text_color');


  $css = "a {color: $puzzle_link_color}";
  $css = "a:hover, a.active {color: $puzzle_main_color}";
  $css .= ".main-menu {background-color: $puzzle_main_color}";
  $css .= ".main-menu a {color: $puzzle_menu_link_color}";
  $css .= ".main-menu a:hover, .main-menu a.active {color: $puzzle_link_color}";
  $css .= "h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {color: $puzzle_header_color}";
  $css .= ".footer {background-color: $puzzle_site_footer_color; color: $puzzle_site_footer_text_color;}";
  $css .= "body {background-color: $puzzle_site_back_color}";
  $css .= ".site-wrapper > .container {background-color: $puzzle_site_content_color}";

  $css .= ".header-date {background-color: $puzzle_header_color}";

  drupal_add_css($css,'inline');
}
