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





    // Sellery section........................................................................................................
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


    // Sellery section end........................................................................................................


    // new collection section Starts here........................................................................................
    //title
    $wp_customize->add_section('custom_new_collection_section_area', array(
        'title' => __('Custom New Collection Settings'),
    ));
    $wp_customize->add_setting('custom_new_collection_title_settings', array(
        'default' => 'New Collection',
    ));
    $wp_customize->add_control('custom_new_collection_title_control', array(
        'label' => __('Enter Title'),
        'section' => 'custom_new_collection_section_area',
        'settings' => 'custom_new_collection_title_settings',
    ));
    //content
    $wp_customize->add_setting('custom_new_collection_content_settings', array(
        'default' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    ));
    $wp_customize->add_control('custom_new_collection_content_settings', array(
        'label' => __('Provide Content'),
        'section' => 'custom_new_collection_section_area',
        'settings' => 'custom_new_collection_content_settings',
        'type' => 'textarea',
    ));

    // Image control
    //image 1
    $wp_customize->add_setting("custom_new_collection_image1_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'custom_new_collection_image1_control',
        array(
            'label' => __('Upload Image 1'),
            'section' => 'custom_new_collection_section_area',
            'settings' => 'custom_new_collection_image1_control_setting',
        )
    ));
    //image 2
    $wp_customize->add_setting("custom_new_collection_image2_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'custom_new_collection_image2_control',
        array(
            'label' => __('Upload Image 2'),
            'section' => 'custom_new_collection_section_area',
            'settings' => 'custom_new_collection_image2_control_setting',
        )
    ));
    //image 3
    $wp_customize->add_setting("custom_new_collection_image3_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'custom_new_collection_image3_control',
        array(
            'label' => __('Upload Image 3'),
            'section' => 'custom_new_collection_section_area',
            'settings' => 'custom_new_collection_image3_control_setting',
        )
    ));

    // new collection section ends here........................................................................................







    //WORKSHOP SECTION STARTS HERE ........................................................................................................
    $wp_customize->add_section('custom_workshop_section_area', array(
        'title' => __('Custom Workshop Settings'),
    ));

    $wp_customize->add_setting('custom_workshop_title_settings', array(
        'default' => 'Workshop',
    ));

    $wp_customize->add_control('custom_workshop_title_control', array(
        'label' => __('Enter Title'),
        'section' => 'custom_workshop_section_area',
        'settings' => 'custom_workshop_title_settings',
    ));

    // Workshop TEXTS

    $wp_customize->add_setting('custom_workshop_content_settings', array(
        'default' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    ));
    $wp_customize->add_control('custom_workshop_content_settings', array(
        'label' => __('Provide Content'),
        'section' => 'custom_workshop_section_area',
        'settings' => 'custom_workshop_content_settings',
        'type' => 'textarea',
    ));

    // Workshop Image
    $wp_customize->add_setting("custom_workshop_image_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'custom_workshop_image_control',
        array(
            'label' => __('Upload Image'),
            'section' => 'custom_workshop_section_area',
            'settings' => 'custom_workshop_image_control_setting',
        )
    ));

    //WORKSHOP SECTION ENDS HERE ........................................................................................................








    //our employee section starts here........................................................................................................ 

    $wp_customize->add_section('custom_our_employee_section_area', array(
        'title' => __('Custom Our Employee Settings'),
    ));

    $wp_customize->add_setting('custom_our_employee_title_settings', array(
        'default' => 'Our Employee',
    ));

    $wp_customize->add_control('custom_our_employee_title_control', array(
        'label' => __('Enter Title'),
        'section' => 'custom_our_employee_section_area',
        'settings' => 'custom_our_employee_title_settings',
    ));

    // Employee 1
    // Image control employee 1
    $wp_customize->add_setting("custom_our_employee_image1_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_our_employee_image1_control",
        array(
            'label' => __("Upload Image 1"),
            'section' => 'custom_our_employee_section_area',
            'settings' => "custom_our_employee_image1_control_setting",
        )
    ));

    // Employee 1 Name
    $wp_customize->add_setting("custom_our_employee_name1_settings", array(
        'default' => "John Doe",
    ));
    $wp_customize->add_control("custom_our_employee_name1_control", array(
        'label' => __("Provide Employee Name 1"),
        'section' => 'custom_our_employee_section_area',
        'settings' => "custom_our_employee_name1_settings",
        'type' => 'textarea',
    ));

    // Employee 1 Message
    $wp_customize->add_setting("custom_our_employee_message1_settings", array(
        'default' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    ));

    $wp_customize->add_control("custom_our_employee_message1_control", array(
        'label' => __("Provide Employee Message 1"),
        'section' => 'custom_our_employee_section_area',
        'settings' => "custom_our_employee_message1_settings",
        'type' => 'textarea',
    ));

    // Employee 2
    // Image control employee 2
    $wp_customize->add_setting("custom_our_employee_image2_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_our_employee_image2_control",
        array(
            'label' => __("Upload Image 2"),
            'section' => 'custom_our_employee_section_area',
            'settings' => "custom_our_employee_image2_control_setting",
        )
    ));

    // Employee 2 Name
    $wp_customize->add_setting("custom_our_employee_name2_settings", array(
        'default' => "John Doe",
    ));
    $wp_customize->add_control("custom_our_employee_name2_control", array(
        'label' => __("Provide Employee Name 2"),
        'section' => 'custom_our_employee_section_area',
        'settings' => "custom_our_employee_name2_settings",
        'type' => 'textarea',
    ));

    // Employee 2 Message
    $wp_customize->add_setting("custom_our_employee_message2_settings", array(
        'default' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    ));

    $wp_customize->add_control("custom_our_employee_message2_control", array(
        'label' => __("Provide Employee Message 2"),
        'section' => 'custom_our_employee_section_area',
        'settings' => "custom_our_employee_message2_settings",
        'type' => 'textarea',
    ));

    // Employee 3
    // Image control employee 3
    $wp_customize->add_setting("custom_our_employee_image3_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_our_employee_image3_control",
        array(
            'label' => __("Upload Image 3"),
            'section' => 'custom_our_employee_section_area',
            'settings' => "custom_our_employee_image3_control_setting",
        )
    ));

    // Employee 3 Name
    $wp_customize->add_setting("custom_our_employee_name3_settings", array(
        'default' => "John Doe",
    ));
    $wp_customize->add_control("custom_our_employee_name3_control", array(
        'label' => __("Provide Employee Name 3"),
        'section' => 'custom_our_employee_section_area',
        'settings' => "custom_our_employee_name3_settings",
        'type' => 'textarea',
    ));

    // Employee 3 Message
    $wp_customize->add_setting("custom_our_employee_message3_settings", array(
        'default' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    ));
    $wp_customize->add_control("custom_our_employee_message3_control", array(
        'label' => __("Provide Employee Message 3"),
        'section' => 'custom_our_employee_section_area',
        'settings' => "custom_our_employee_message3_settings",
        'type' => 'textarea',
    ));

    //our employee section ends here........................................................................................................


    //gallery section starts here........................................................................................................
    $wp_customize->add_section('custom_gallery_section_area', array(
        'title' => __('Custom Gallery Settings'),
    ));

    $wp_customize->add_setting('custom_gallery_title_settings', array(
        'default' => 'Gallery',
    ));

    $wp_customize->add_control('custom_gallery_title_control', array(
        'label' => __('Enter Title'),
        'section' => 'custom_gallery_section_area',
        'settings' => 'custom_gallery_title_settings',
    ));

    // Gallery Image 1
    $wp_customize->add_setting("custom_gallery_image1_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_gallery_image1_control",
        array(
            'label' => __("Upload Image 1"),
            'section' => 'custom_gallery_section_area',
            'settings' => "custom_gallery_image1_control_setting",
        )
    ));

    // Gallery Image 2
    $wp_customize->add_setting("custom_gallery_image2_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_gallery_image2_control",
        array(
            'label' => __("Upload Image 2"),
            'section' => 'custom_gallery_section_area',
            'settings' => "custom_gallery_image2_control_setting",
        )
    ));

    // Gallery Image 3
    $wp_customize->add_setting("custom_gallery_image3_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_gallery_image3_control",
        array(
            'label' => __("Upload Image 3"),
            'section' => 'custom_gallery_section_area',
            'settings' => "custom_gallery_image3_control_setting",
        )
    ));

    // Gallery Image 4
    $wp_customize->add_setting("custom_gallery_image4_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        "custom_gallery_image4_control",
        array(
            'label' => __("Upload Image 4"),
            'section' => 'custom_gallery_section_area',
            'settings' => "custom_gallery_image4_control_setting",
        )
    ));

    //Gallary section ends here...............................................................................................................

    //our story section starts here........................................................................................................

    $wp_customize->add_section('custom_our_story_section_area', array(
        'title' => __('Custom Our Story Settings'),
    ));
    //title
    $wp_customize->add_setting('custom_our_story_title_settings', array(
        'default' => 'Our Story',
    ));

    $wp_customize->add_control('custom_our_story_title_control', array(
        'label' => __('Enter Title'),
        'section' => 'custom_our_story_section_area',
        'settings' => 'custom_our_story_title_settings',
    ));

    //content
    $wp_customize->add_setting('custom_our_story_content_settings', array(
        'default' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.",
    ));
    $wp_customize->add_control('custom_our_story_content_settings', array(
        'label' => __('Provide Content'),
        'section' => 'custom_our_story_section_area',
        'settings' => 'custom_our_story_content_settings',
        'type' => 'textarea',
    ));

    // Image control
    $wp_customize->add_setting("custom_our_story_image_control_setting");
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'custom_our_story_image_control',
        array(
            'label' => __('Upload Image'),
            'section' => 'custom_our_story_section_area',
            'settings' => 'custom_our_story_image_control_setting',
        )
    ));

    //footer section starts here........................................................................................................
    $wp_customize->add_section('custom_footer_section_area', array(
        'title' => __('Custom Footer Settings'),
    ));

    //social media
    $wp_customize->add_setting('custom_footer_social_media_settings', array(
        'default' => 'Social Media',
    ));

    $wp_customize->add_control('custom_footer_social_media_control', array(
        'label' => __('Enter Social Media'),
        'section' => 'custom_footer_section_area',
        'settings' => 'custom_footer_social_media_settings',
    ));

    //footer section ends here........................................................................................................
}

add_action('customize_register', 'custom_theme_panel_settings');









// end here custume theme customize ........................................................................................



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
