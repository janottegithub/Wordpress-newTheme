<?php
function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function include_jquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . 'three.r95.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'include_jquery');


function load_js()
{

    wp_register_script('customjs', get_template_directory_uri().'/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
    
}
add_action('wp_enqueue_scripts', 'load_js');

/*

function vanta_js()
{

    wp_register_script('treejs', get_template_directory_uri().'/js/vanta/three.r95.min.js', '', 1, true);
    wp_enqueue_script('treejs');

    wp_register_script('vanta', get_template_directory_uri().'/js/vanta/vanta.birds.min.js', '', 1, true);
    wp_enqueue_script('vanta');
    
}
add_action('wp_enqueue_scripts', 'vanta_js');
*/


add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('footer Menu', 'theme'),


    )
);
