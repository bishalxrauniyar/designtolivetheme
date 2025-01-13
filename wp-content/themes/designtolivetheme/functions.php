<?php
//custome theme customizers......................................................................................................................


function custom_theme_panel_settings($wp_customize)
{
    // Title area
    $wp_customize->add_section('custom_banner_section_area', array(
        'title' => __('Custom Banner Settings'),
    ));
    $wp_customize->add_setting('custom_banner_title_settings', array(
        'default' => 'Design to Live',
    ));
    $wp_customize->add_control('custom_banner_title_control', array(
        'label' => __('Enter Title'),
        'section' => 'custom_banner_section_area',
        'settings' => 'custom_banner_title_settings',
    ));

    // Content area
    $wp_customize->add_setting('custom_banner_content_settings', array(
        'default' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    ));
    $wp_customize->add_control('custom_banner_content_settings', array(
        'label' => __('Provide Content'),
        'section' => 'custom_banner_section_area',
        'settings' => 'custom_banner_content_settings',
        'type' => 'textarea',
    ));

    // Image control
    $wp_customize->add_setting("custom_banner_image_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'custom_banner_image_control',
        array(
            'label' => __('Upload Image'),
            'section' => 'custom_banner_section_area',
            'settings' => 'custom_banner_image_control_setting',
        )
    ));





    // Sellery section
    $wp_customize->add_section('custom_sellery_section_area', array(
        'title' => __('Custom Sellery Settings'),
    ));

    // Sellery title
    $wp_customize->add_setting('custom_sellery_title_settings', array(
        'default' => 'Sellery',
    ));
    $wp_customize->add_control('custom_sellery_title_control', array(
        'label' => __('Enter Title'),
        'section' => 'custom_sellery_section_area',
        'settings' => 'custom_sellery_title_settings',
    ));

    // Sellery Item 1
    $wp_customize->add_setting("custom_sellery_image1_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_sellery_image1_control",
        array(
            'label' => __("Upload Image 1"),
            'section' => 'custom_sellery_section_area',
            'settings' => "custom_sellery_image1_control_setting",
        )
    ));
    $wp_customize->add_setting("custom_sellery_content1_settings", array(
        'default' => "MoonPlate",
    ));
    $wp_customize->add_control("custom_sellery_content1_control", array(
        'label' => __("Provide Item Name 1"),
        'section' => 'custom_sellery_section_area',
        'settings' => "custom_sellery_content1_settings",
        'type' => 'textarea',
    ));
    $wp_customize->add_setting("custom_sellery_price1_settings", array(
        'default' => "120$",
    ));
    $wp_customize->add_control("custom_sellery_price1_control", array(
        'label' => __("Provide Item Price 1"),
        'section' => 'custom_sellery_section_area',
        'settings' => "custom_sellery_price1_settings",
        'type' => 'textarea',
    ));



    // Sellery Item 2
    $wp_customize->add_setting("custom_sellery_image2_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_sellery_image2_control",
        array(
            'label' => __("Upload Image 2"),
            'section' => 'custom_sellery_section_area',
            'settings' => "custom_sellery_image2_control_setting",
        )
    ));
    $wp_customize->add_setting("custom_sellery_content2_settings", array(
        'default' => "Silver Set",
    ));
    $wp_customize->add_control("custom_sellery_content2_control", array(
        'label' => __("Provide Item Name 2"),
        'section' => 'custom_sellery_section_area',
        'settings' => "custom_sellery_content2_settings",
        'type' => 'textarea',
    ));
    $wp_customize->add_setting("custom_sellery_price2_settings", array(
        'default' => "75$",
    ));
    $wp_customize->add_control("custom_sellery_price2_control", array(
        'label' => __("Provide Item Price 2"),
        'section' => 'custom_sellery_section_area',
        'settings' => "custom_sellery_price2_settings",
        'type' => 'textarea',
    ));




    // Sellery Item 3
    $wp_customize->add_setting("custom_sellery_image3_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_sellery_image3_control",
        array(
            'label' => __("Upload Image 3"),
            'section' => 'custom_sellery_section_area',
            'settings' => "custom_sellery_image3_control_setting",
        )
    ));
    $wp_customize->add_setting("custom_sellery_content3_settings", array(
        'default' => "Nordic Container",
    ));
    $wp_customize->add_control("custom_sellery_content3_control", array(
        'label' => __("Provide Item Name 3"),
        'section' => 'custom_sellery_section_area',
        'settings' => "custom_sellery_content3_settings",
        'type' => 'textarea',
    ));
    $wp_customize->add_setting("custom_sellery_price3_settings", array(
        'default' => "120$",
    ));
    $wp_customize->add_control("custom_sellery_price3_control", array(
        'label' => __("Provide Item Price 3"),
        'section' => 'custom_sellery_section_area',
        'settings' => "custom_sellery_price3_settings",
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'custom_theme_panel_settings');









// end here.......................................................................................................................................



// adds dynamic title tag support,custom-logo,post thumbnail
function designtolive_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
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
    wp_enqueue_script('designtolive_main_css', get_template_directory_uri() . 'style.css', array(), 'Version', true);
    wp_enqueue_script('designtolive_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css", array(), '6.7.1', true);
}
add_action('wp_enqueue_scripts', 'designtolive_theme_load_styles');


//load scripts
function designtolive_theme_load_scripts()
{
    wp_enqueue_script('designtolive_font', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css", array(), '6.7.1', true);
    wp_enqueue_script('designtolive_script', get_template_directory_uri() . '/js/script.js', array(), 'Version', true);
}
add_action('wp_enqueue_scripts', 'designtolive_theme_load_scripts');
