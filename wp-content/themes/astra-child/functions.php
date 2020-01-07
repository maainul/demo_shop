<?php
/**
 * demo-my-shop Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package demo-my-shop
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_DEMO_MY_SHOP_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'demo-my-shop-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_DEMO_MY_SHOP_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );