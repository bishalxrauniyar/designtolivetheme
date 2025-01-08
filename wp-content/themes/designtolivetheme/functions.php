<?php
function wpdocs_theme_name_scripts_sss()
{
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts_sss');


// function fff()
// {
//     die('sdfsdf');
// }
// add_action('wp_head', 'fff');
