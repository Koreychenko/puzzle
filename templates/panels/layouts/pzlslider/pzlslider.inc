<?php

// Plugin definition
$plugin = array(
  'title' => t('Puzzle Slider Inner layout'),
  'category' => t('Puzzle'),
  'icon' => 'pzlslider.png',
  'theme' => 'panels_pzlslider',
  'css' => 'pzlslider.css',
  'regions' => array(
    'slider_content' => t('Slider Fullwidth Content'),
    'main_content' => t('Content'),
  ),
);
