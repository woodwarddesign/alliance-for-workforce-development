<?php

/**
 * Implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('Atlas site default'),
  'category' => t('Columns: 2'),
  'icon' => 'icon.png',
  'theme' => 'atlas-site-default',
  'css' => 'css/panels-layouts/site-default.css',
  'regions' => array(
  'branding' => t('Branding'),
  'menu' => t('Menu'),
  'main_content' => t('Main Content'),
  'postscript' => t('Postscript'),
  'footer' => t('Footer Content'),
  ),
);
