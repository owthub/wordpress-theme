<?php

function onlinewebtutor_scripts() {
    // styles
    wp_enqueue_style("bootstrap.min.css", get_template_directory_uri() . "/css/bootstrap.min.css", '', "1.0");
    wp_enqueue_style("font-awesome.min.css", get_template_directory_uri() . "/font-awesome/css/font-awesome.min.css", '', "1.0");
    wp_enqueue_style("style.css", get_template_directory_uri() . "/css/style.css", '', "1.0");
    wp_enqueue_style("stylesheet.css", get_template_directory_uri() . "/fonts/antonio-exotic/stylesheet.css", '', "1.0");
    wp_enqueue_style("lightbox.min.css", get_template_directory_uri() . "/css/lightbox.min.css", '', "1.0");
    wp_enqueue_style("responsive.css", get_template_directory_uri() . "/css/responsive.css", '', "1.0");

    //scripts
    wp_enqueue_script("jquery.min.js", get_template_directory_uri() . "/js/jquery.min.js", "", "1.0");
    wp_enqueue_script("bootstrap.min.js", get_template_directory_uri() . "/js/bootstrap.min.js", '', "1.0");
    wp_enqueue_script("lightbox-plus-jquery.min.js", get_template_directory_uri() . "/js/lightbox-plus-jquery.min.js", '', "1.0");
    wp_enqueue_script("instafeed.min.js", get_template_directory_uri() . "/js/instafeed.min.js", '', "1.0");
    wp_enqueue_script("custom.js", get_template_directory_uri() . "/jscustom.js", '', "1.0");
}

add_action("wp_enqueue_scripts", "onlinewebtutor_scripts");

function owt_theme_supports() {

    add_theme_support("post-thumbnails");
    //images size
    add_image_size("small-thumbnail", 120, 90, true); // 120 wide 90 tall
    add_image_size("banner-image", 700, 350, true);

    // post formats
    add_theme_support("post-formats", array("aside", "gallery", "link"));
}

add_action("after_setup_theme", "owt_theme_supports");

function owt_custom_init() {
    $args = array(
        'public' => true,
        'label' => 'Movies'
    );
    register_post_type('movie', $args);
    // single-movie.php
}

add_action('init', 'owt_custom_init');

function owt_theme_menus() {

    register_nav_menus(array(
        "header" => "Header Menu",
        "footer" => "Footer Menu"
    ));
}

add_action("init", "owt_theme_menus");

add_filter("nav_menu_link_attributes", "owt_each_anchor_attr");

function owt_each_anchor_attr($attr) {
    $attr['class'] = "owt-anchor-class";
    return $attr;
}

//add_theme_support("menus");

add_filter("nav_menu_css_class", "owt_each_li_class", 10, 4);

function owt_each_li_class($classes, $item, $args, $dept) {
    $classes[] = "owt-li-class";
    return $classes;
}

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar(array(
        'name' => "Right Sidebar",
        'id' => 'right-sidebar',
        'description' => "This is my right sidebar",
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle owt-class">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => "Left Sidebar",
        'id' => 'left-sidebar',
        'description' => "This is my Left sidebar",
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');

// theme customizer panel
function owt_custom_theme_customize_register($wp_customize) {
    
    $wp_customize->add_section('owt_main_section', array(
        'title' => "Online Web tutor Section",
        'description' => '',
        'priority' => 120,
    ));
    
    
    //  =============================
    //  = Footer Text              =
    //  =============================
    $wp_customize->add_setting('owt_first_footer_setting', array(
        'default'        => 'Designed and developed by Online Web Tutor',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('owt_first_footer_control', array(
        'label'      => "Footer text",
        'section'    => 'owt_main_section',
        'settings'   => 'owt_first_footer_setting',
    ));
    
    //  =============================
    //  = Footer Button Link               =
    //  =============================
    $wp_customize->add_setting('owt_first_footer_link', array(
        'default'        => 'Online Web tutor',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('owt_first_footer_link_control', array(
        'label'      => "Footer Link",
        'section'    => 'owt_main_section', // type="text"
        'settings'   => 'owt_first_footer_link',
    ));
    
        //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('owt_setting_footer_link', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('owt_footer_pages_control', array(
        'label'      => "Footer Link",
        'section'    => 'owt_main_section',
        'type'    => 'dropdown-pages',
        'settings'   => 'owt_setting_footer_link',
    ));
    
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('owt_image_uploader', array(
        'default'           => get_bloginfo("template_url").'/images/category4.png',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => "Choose Image",
        'section'  => 'owt_main_section',
        'settings' => 'owt_image_uploader',
    )));
    
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('owt_color_picker_id', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => "Book Now Background",
        'section'  => 'owt_main_section',
        'settings' => 'owt_color_picker_id',
    )));
}

add_action('customize_register', 'owt_custom_theme_customize_register');
