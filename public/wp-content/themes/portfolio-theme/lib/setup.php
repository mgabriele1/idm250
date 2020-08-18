<?php

/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

/**
* Include any styles into the site the proper way
*
* @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/
function include_css_files() {
    // Example of including an external link
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap');
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    // Example of including a style local to your theme root
    wp_enqueue_style('idm250-css', get_template_directory_uri() . '/dist/css/style.css');
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_css_files');

/**
* Include any scripts into the site the proper way
*
* @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/
function include_js_files() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', [], null, true);

    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', [], false, true);
    wp_enqueue_script('idm250-js', get_template_directory_uri() . '/dist/scripts/app.js', ['jquery', 'slick'], false, true);
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');

/**
* Register custom sidebar for my theme
*
* @link https://developer.wordpress.org/reference/functions/register_sidebar/
* @return void
*/
function register_theme_sidebar() {
    register_sidebar([
      'name'        => 'Blog Sidebar',
      'id'          => 'blog-sidebar',
      'description' => 'This is a custom sidebar for my theme'
  ]);
}

add_action('widgets_init', 'register_theme_sidebar');

/**
* Register the menus on my site
*
* @link https://developer.wordpress.org/reference/functions/register_nav_menus/
* @return void
*/
function register_theme_navigation() {
    register_nav_menus([
      'primary_menu' => 'Primary Menu',
      'footer_menu'  => 'Footer Menu',
      'social_menu'  => 'Social Menu',
  ]);
}

add_action('after_setup_theme', 'register_theme_navigation');
