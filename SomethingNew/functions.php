<?php

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Sudaro galimybe pagrindiniame page'e deti kokias nori nuotraukas
add_image_size('pic',195,195,true);
add_image_size('spot',670,281,true);

// Prideda Menu skilti i wp-admin
register_nav_menu( 'footer-menu', __('Footer Menu','SomethingNew') );

// Isidedam Widgets i WP
$args = array(
    'name' => 'Main Sidebar',
    'id' => 'sidebar-1',
    'description' => 'Main widget area',
);
register_sidebar( $args );

//
function arunas_load_widget() {
    register_widget( 'Arunas_Widget' );
}
add_action( 'widgets_init', 'arunas_load_widget' );

include_once( 'includes/arunas-widget.php' );