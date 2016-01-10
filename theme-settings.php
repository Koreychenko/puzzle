<?php
function puzzle_form_system_theme_settings_alter(&$form, $form_state) {
  $form['puzzle_font_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Text Color'),
    '#default_value' => theme_get_setting('puzzle_font_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_header_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Header Color'),
    '#default_value' => theme_get_setting('puzzle_header_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_main_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Main Color'),
    '#default_value' => theme_get_setting('puzzle_main_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_link_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Link Color'),
    '#default_value' => theme_get_setting('puzzle_link_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_site_back_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Site Back Color'),
    '#default_value' => theme_get_setting('puzzle_site_back_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_site_content_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Site Content Color'),
    '#default_value' => theme_get_setting('puzzle_site_content_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_site_footer_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Site Footer Color'),
    '#default_value' => theme_get_setting('puzzle_site_footer_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_site_footer_text_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Site Footer Text Color'),
    '#default_value' => theme_get_setting('puzzle_site_footer_text_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

  $form['puzzle_menu_link_color'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Menu link Color'),
    '#default_value' => theme_get_setting('puzzle_menu_link_color'),
    '#description'   => t("set color in hex format, e.g. #333333"),
  );

}
