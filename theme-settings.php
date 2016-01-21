<?php
function puzzle_form_system_theme_settings_alter(&$form, $form_state) {
  $form['layout_style'] = array(
    '#type'          => 'select',
    '#title'         => t('Layout Style'),
    '#default_value' => theme_get_setting('layout_style'),
    '#options' => array(
      'wide' => t('Wide'),
      'boxed' => t('Boxed')
      ),
  );

  $form['main_color'] = array(
    '#type'          => 'select',
    '#title'         => t('Main Color'),
    '#default_value' => theme_get_setting('main_color'),
    '#options' => array(
      'corporate' => 'corporate',
      'cyan' => 'cyan',
      'medical' => 'medical',
      'restaurant' => 'restaurant',
      'portfolio' => 'portfolio',
      'orange' => 'orange',
      'tangerine' => 'tangerine',
      'gold' => 'gold',
      ),
  );

  $form['background_color'] = array(
    '#type'          => 'select',
    '#title'         => t('Background'),
    '#default_value' => theme_get_setting('background_color'),
    '#options' => background_color(),
  );

  $form['background_image'] = array(
    '#type'          => 'managed_file',
    '#title'         => t('Background Image'),
    '#default_value' => theme_get_setting('background_image'),
     '#upload_location' => file_default_scheme() . '://theme_background',
     '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
      ),
  );

  $form['header_top_padding'] = array(
    '#type'          => 'textfield',
    '#title'         => t('HEader Top Padding'),
    '#default_value' => theme_get_setting('header_top_padding'),
  );

}


function background_color() {
  $options = array();
  for ($i=1; $i<=10; $i++) {
    $options['bg'.$i] = 'bg'.$i;
  }
  return $options;
}
