<?php

    /*
	 * Enable support for custom logo.
	 *
	 */
add_theme_support( 'custom-logo');

function top_custom_logo_setup() {
    $args = array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



//  wp_nav_menu() in one location.
register_nav_menus( array(
    'main-menu' => esc_html__( 'Primary', 'top' ),
) );

    /*
	 * Enable support for post thumbnails.
	 *
	 */
add_theme_support( 'post-thumbnails' );

function top_scripts() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script( 'top-script', get_stylesheet_directory_uri().'/dist/js/main.js', ['jquery'] );

    wp_enqueue_style( 'top-bootstarp-style',  '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'  );
    wp_enqueue_style( 'top-style', get_stylesheet_directory_uri().'/dist/css/main.css' );

    wp_enqueue_script( 'top-bootstrap',  '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'top_scripts' );

function top_customize_register($wp_customize) {
    $wp_customize->add_panel( 'front_page', array(
        'title' => __( 'Front Page Section' ),
        'description' => __( 'front page edit', 'top' ),
        'priority' => 30,
    ) );

    //    Last new section start

    $wp_customize->add_section('last', array(
        "title" => __('Last news section', 'top'),
        'priority' => 29,
        'panel' => 'front_page',
    ));

    $wp_customize->add_setting('last_news_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'last_news_title', array(
        'label' => __('Last news Title', 'top'),
        'section' => 'last',
        'settings' => 'last_news_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('last_news_text', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'last_news_text', array(
        'label' => __('Last News Description', 'top'),
        'section' => 'last',
        'settings' => 'last_news_text',
        'type' => 'text'
    )));

//    Last new section end

//    Old news section start

    $wp_customize->add_section('old', array(
        "title" => __('Old news section', 'top'),
        'priority' => 29,
        'panel' => 'front_page',
    ));

    $wp_customize->add_setting('old_news_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'old_news_title', array(
        'label' => __('Old news Title', 'top'),
        'section' => 'old',
        'settings' => 'old_news_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('old_news_text', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'old_news_text', array(
        'label' => __('Old News Description', 'top'),
        'section' => 'old',
        'settings' => 'old_news_text',
        'type' => 'text'
    )));

//    Old news section end

}
add_action( 'customize_register', 'top_customize_register' );