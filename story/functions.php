<?php

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_action( 'wp_enqueue_scripts', 'arunas_scripts' );
function arunas_scripts() {
    wp_register_style(
        'theme-style',
        get_template_directory_uri(). '/assets/css/main.css' );
  wp_enqueue_style( 'theme-style' );

  wp_register_script(
      'jquery-scrollex',
      get_template_directory_uri(). '/assets/js/jquery.scrollex.min.js',
    array( 'jquery' ),
    '0.1.0',
    true
 );

  wp_register_script(
        'jquery-scrolly',
        get_template_directory_uri(). '/assets/js/jquery.scrolly.min.js',
        array( 'jquery' ),
        '0.1.0',
        true
    );

    wp_register_script(
        'jquery-skel',
        get_template_directory_uri(). '/assets/js/skel.min.js',
        array( 'jquery' ),
        '0.1.0',
        true
    );

    wp_register_script(
        'jquery-util',
        get_template_directory_uri(). '/assets/js/util.js',
        array( 'jquery' ),
        '0.1.0',
        true
    );

    wp_register_script(
        'theme-script',
        get_template_directory_uri(). '/assets/js/main.js',
        array( 'jquery', 'jquery-util', 'jquery-scrollex', 'jquery-scrolly', 'jquery-skel',),
        '0.1.0',
        true
    );
 wp_enqueue_script( 'theme-script' );
}

// Sudaro galimybe pagrindiniame page'e deti kokias nori nuotraukas
add_image_size('pic',434,434,true);
add_image_size('spot',1440,900,true);

// Atvaizduoja informacija, jeigu parasome wp post'e [vardas]
add_shortcode( 'vardas', 'vardas_shortcode' );
function vardas_shortcode( $args, $content ) {
    return 'Seimur';
}


add_shortcode( 'kitas', 'kitas_shortcode' );

function kitas_shortcode( $args, $content ) {
    $defaults = array(
        'title'       => __( 'Some Title', 'temos-katalogas' ),
        'description' => '',
    );
    $args = wp_parse_args( $args, $defaults );
    $result = "<strong>{$args['title']}</strong>";
    if ( $args['description'] ) {
        $result .= "- <em>{$args['description']}</em>";
    }
    if ( $content ) {
        $result .= '<br />' . do_shortcode( $content );
    }
    return $result;
}

// Prideda Menu skilti i wp-admin
register_nav_menu( 'footer-menu', __('Footer Menu','story') );

// Suformatuoja footeryje menu pagal nurodytus stylius
add_filter('nav_menu_link_attributes', 'footer_menu', 10, 2);
function footer_menu ($attributes, $item){
    $attributes['class'] = 'icon style2 ' . $item->attr_title;
    return $attributes;
}
// Paslepia footer menu title'us
add_filter('nav_menu_item_title', 'footer_title');
function footer_title($title){
    $title = '<span class="label">' . $title . '</span>';
    return $title;
}

// Isidedam Widgets i WP
$args = array(
    'name' => 'Main Sidebar',
    'id' => 'sidebar-1',
    'description' => 'Main widget area',
    'before_widget' => '<article id="%1$s" class="widget %2$s">',
    'after_widget'  => '</article>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
);
register_sidebar( $args );

//
function arunas_load_widget() {
    register_widget( 'Arunas_Widget' );
}
add_action( 'widgets_init', 'arunas_load_widget' );

include_once( 'includes/arunas-widget.php' );

/*** 2017-12-12 ***/

// registruoti customizer objektus
add_action( 'customize_register', 'arunas_customize_register' );
function arunas_customize_register( $wp_customize ) {
    // Customizeryje isidedam papildoma sekcija
    $wp_customize->add_section(
        'story-copyright',
        array(
            'title' => __( 'Story-copyright' ),
            'description' => __( 'Add custom things here' ),
            'panel' => '', // Not typically needed.
            'priority' => 160,
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
        )
    );
    // Papildomos customize'o sekcijos nustatymai
    $wp_customize->add_setting( 
        'story-copyright',
        array(
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'default' => __('All rights reserved', 'story'),
            'transport' => 'refresh', // or postMessage
            'sanitize_callback' => '',
            'sanitize_js_callback' => '', // Basically to_json.
        )
    );
    //
    $wp_customize->add_control(
        'story-copyright',
        array(
            'type' => 'text',
            'priority' => 10, // Within the section.
            'section' => 'story-copyright', // Required, core or custom.
            'label' => __( 'Date' ),
            'description' => __( 'This is a date control with a red border.' ),
            'input_attrs' => array(
                'class' => 'my-custom-class-for-js',
                'style' => 'border: 1px solid #900',
                'placeholder' => __( 'mm/dd/yyyy' ),
            ),
            'active_callback' => 'is_front_page',
        )
    );

    // Refreshinasi tik tam tikra dalis.
    $wp_customize->selective_refresh->add_partial(
        'story-copyright', array(
            'selector' => 'footer p',
            'container_inclusive' => false,
            'render_copyright' => 'callback_function',
        )
    );
}
function render_copyright(){
    return get_theme_mod('story-copyright');
}


