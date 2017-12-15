<?php
/*
Plugin Name: My Very First
Description: This is my very first plugin ever!
Version: 0.1.0
Author: Seimur
*/

///// 1.
//Jeigu wp-admin post'e parasysim [vardas], tai tikrame poste atvaizduos 'Seimur'
add_shortcode( 'vardas', 'vardas_shortcode' );
function vardas_shortcode( $args, $content ) {
    return 'Seimur';
}

///// 2.
//Pridedam action'a, kad galetume naudoti font-awesome wordpress'e
add_action( 'wp_enqueue_scripts', 'load_fa' );
function load_fa() {
    wp_enqueue_style( 'fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
// Padarom taip, kad galetume prie title rasyti shortcode'a ir atvaizduoti paveiksleli
if (! is_admin()){
    add_filter('the_title', 'do_shortcode');
}

//Shortcode'ai pridedami tam, kad galetume i title irasyti shortcode'us
add_shortcode('photo', 'photo_shortcode');
function photo_shortcode() {
    return '<i class="fa fa-camera" aria-hidden="true"></i>';
}

add_shortcode('video', 'video_shortcode');
function video_shortcode() {
    return '<i class="fa fa-forward" aria-hidden="true"></i>';
}
