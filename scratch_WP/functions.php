<?php

function scratch_WP_theme_setup() {
register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
) );
 }

add_action( 'after_setup_theme', 'scratch_WP_theme_setup' );

wp_enqueue_style( 'style', get_stylesheet_uri() );
add_theme_support( 'post-thumbnails' );