<?php

function beauty_style()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css');
}


function beauty_scripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), null, false);
    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.0', false);
    wp_enqueue_script('fancybox-script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js', array('jquery'), null, true);
    wp_enqueue_script('slick-script', get_template_directory_uri() . '/js/slick.js', array('jquery'), null, false);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, false);
}

function load_fonts()
{
    wp_register_style(
        'et-googleFonts',
        'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Raleway:wght@500&display=swap',
        array(),
        null,
        'all'
    );
    wp_enqueue_style('et-googleFonts');
}

if (
    function_exists('acf_add_options_page')
) {
    acf_add_options_page();
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Settings',
        'menu_title'    => 'Footer',
    ));
}

add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'main_menu' => 'Primary menu',
    ));
});

add_action('wp_enqueue_scripts', 'beauty_style');
add_action('wp_enqueue_scripts', 'beauty_scripts');
add_action('wp_print_styles', 'load_fonts');
