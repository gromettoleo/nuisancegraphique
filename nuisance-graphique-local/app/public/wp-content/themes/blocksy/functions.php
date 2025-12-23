<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';

add_filter('template_include', 'template_override');
function template_override($template) {
  if (is_front_page()) {
    return 'newfrontpage.php';
  }
  // default wordpress behavior
  return $template;
}