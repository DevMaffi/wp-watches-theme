<?php

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Load styles and scripts

add_action('wp_enqueue_scripts', 'watches_styles');
add_action('wp_enqueue_scripts', 'watches_scripts');

function watches_styles()
{
  wp_enqueue_style('watches-style', get_stylesheet_uri());
}

function watches_scripts()
{
  $root_dir = 'assets/js';

  wp_enqueue_script('watches-vendors', get_template_directory_uri() . "/$root_dir/2a44116dbc8a78e55fb3.js", array(), null, true);
  wp_enqueue_script('watches-index', get_template_directory_uri() . "/$root_dir/35bd31f56b94b95cd970.js", array(), null, true);
}

// Config posts

add_theme_support('post-thumbnails');

// Handle menus

add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_menu_links', 10, 3);

function filter_menu_links($atts, $item, $args)
{
  if ($args->menu === 'About menu' || $args->menu === 'Product menu') {
    $atts['class'] = 'footer__link';
  }

  return $atts;
}
