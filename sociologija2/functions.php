<?php
add_theme_support('post-thumbnails');

// Navigation menu
register_nav_menu( 'primary', __('Header Menu'));

add_image_size('apie',300,298,true);

function book_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Renginiai', 'textdomain' ),
        'menu_icon' => 'dashicons-book',
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'book_setup_post_type' );

