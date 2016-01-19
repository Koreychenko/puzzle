<?php

// Plugin definition
$plugin = array(
  'title' => t('Puzzle Main Site layout'),
  'category' => t('Puzzle'),
  'icon' => 'puzzlemain.png',
  'theme' => 'panels_puzzlemain',
  'css' => 'puzzlemain.css',
  'regions' => array(
    'logo' => t('Logo'),
    'phones' => t('Phones'),
    'address' => t('Address'),
    'menu' => t('Top menu'),
    'page_title' => t('Page title'),
    'main_content' => t('Content'),
    'footer' => t('Footer'),
  ),
);
