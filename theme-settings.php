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


}

function background_color() {
  $options = array();
  for ($i=1; $i<=10; $i++) {
    $options['bg'.$i] = 'bg'.$i;
  }
  return $options;
}
