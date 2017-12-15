<?php
/*
Plugin Name: Sausainiai
Description: Will show you cookies!
Version: 0.1.0
Author: Seimur
*/

// Cookie law sprendimas is external source https://cookieconsent.insites.com/
/*
add_action( 'wp_enqueue_scripts', 'load_css' );
function load_css() {
    wp_enqueue_style( 'fa', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css' );
}

add_action( 'wp_enqueue_scripts', 'load_js' );
function load_js() {
    wp_enqueue_script( 'fa', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js' );
}
*/

// Prideda JAVAscript ir CSS file'us prie projekto
add_action('wp_enqueue_scripts', 'callback_for_setting_up_scripts');
function callback_for_setting_up_scripts() {
    wp_register_style( 'style', plugins_url('style.css', __FILE__ ));
    wp_enqueue_style( 'style' );
    wp_enqueue_script( 'script', plugins_url('script.js', __FILE__));
}

//Sukuriam cookie ir idedam ji
add_action( 'init', 'setting_my_first_cookie' );
function setting_my_first_cookie() {
    $cookie_name = "My_first_cookie";
    $cookie_value = "WP-cookie";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}


// Atsiranda notification, kad cookies aktyvuoti, jeigu tas cookies nera dar ijungtas
add_action('wp_footer', 'sausainis');
function sausainis(){
    if(!isset($_COOKIE['My_first_cookie'])) {
        echo "<div class='sausainis' id='divas'>
            <p class='tekstas'>Šita svetainė naudoja sausainius <button onclick='sausainis()'>Tinka</button></p>
            </div>";
    }
}




