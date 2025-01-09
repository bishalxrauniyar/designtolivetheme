<?php
// adds dynamic title tag support
function designtolive_theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'designtolive_theme_support');

function designtolive_nav_menus()
{
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items",
        'mobile' => "Mobile Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'designtolive_nav_menus');

// Theme Support load styles
function designtolive_theme_load_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('designtolive_script', get_template_directory_uri() . '/js/script.js', array(), 'Version', true);
    wp_enqueue_script('designtolive_tailwind', "https://cdn.tailwindcss.com", array(), '1.0.0', true);
    // wp_enqueue_script('designtolive_main_css', get_template_directory_uri() . 'style.css', array(), 'Version', true);
    wp_enqueue_script('designtolive_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css", array(), '6.7.1', true);
}
add_action('wp_enqueue_scripts', 'designtolive_theme_load_styles');


//load scripts
function designtolive_theme_load_scripts()
{
    // wp_enqueue_script('designtolive_font', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css", array(), '6.7.1', true);
    wp_enqueue_script('designtolive_script', get_template_directory_uri() . '/js/script.js', array(), 'Version', true);
    // wp_enqueue_script('designtolive_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css", array(), '6.7.1', true);
}
add_action('wp_enqueue_scripts', 'designtolive_theme_load_scripts');



// function fff()
// {
//     die('sdfsdf');
// }
// add_action('wp_head', 'fff');
