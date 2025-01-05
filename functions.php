<?php

// Add theme support for automatic feed links
add_theme_support( 'automatic-feed-links' );


if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}


// Enable WP_DEBUG for theme development
if ( ! defined( 'WP_DEBUG' ) ) {
    define( 'WP_DEBUG', true );
}
if ( ! defined( 'WP_DEBUG_LOG' ) ) {
    define( 'WP_DEBUG_LOG', true );
}
if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
    define( 'WP_DEBUG_DISPLAY', true );
}
if ( ! defined( 'SCRIPT_DEBUG' ) ) {
    define( 'SCRIPT_DEBUG', true );
}


/*======================
 For Customizable Title
======================*/
add_theme_support('title-tag');


/*========================================================
 For Default Showing my Home Page Tmeplate in Live Preview
========================================================*/
function arunvptheme_setup_homepage() {
    // Check if the front page is already set to a static page
    $front_page = get_option('page_on_front');
    if (!$front_page) {
        // Create a new page with the Home Page Template
        $homepage_id = wp_insert_post(array(
            'post_title'     => 'Home',
            'post_type'      => 'page',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_author'    => 1,
            'page_template'  => 'template-home.php' // Your template file name
        ));

        // Set the newly created page as the front page
        update_option('page_on_front', $homepage_id);
        update_option('show_on_front', 'page');
    }
}
add_action('after_switch_theme', 'arunvptheme_setup_homepage');



/*=======================================
 For Adding all css, js, and jquery files
=======================================*/
function arun_css_js_adding()
{

    //style.css adding
    wp_enqueue_style('arun_style_css', get_stylesheet_uri());

    //custom.css adding
    wp_register_style('arun_custom_css', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_custom_css');

    //single.css adding
    wp_register_style('arun_single_css', get_template_directory_uri() . '/css/single.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_single_css');

    //template-home.css adding
    wp_register_style('arun_template_home_css', get_template_directory_uri() . '/css/template-home.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_template_home_css');

    //sidebar.css adding
    wp_register_style('arun_sidebar_css', get_template_directory_uri() . '/css/sidebar.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_sidebar_css');

    //scrollbar.css adding
    wp_register_style('arun_scrollbar_css', get_template_directory_uri() . '/css/scrollbar.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_scrollbar_css');

    //pagination.css adding
    wp_register_style('arun_pagination_css', get_template_directory_uri() . '/css/pagination.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_pagination_css');

    //copyright.css adding
    wp_register_style('arun_copyright_css', get_template_directory_uri() . '/css/copyright.css', array(), '1.0.0', 'all');
    wp_enqueue_style('arun_copyright_css');


    //custom.js adding
    wp_register_script('arun_custom_js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('arun_custom_js');

    //Latest jQuery Calling
    wp_enqueue_script('jquery');

    //bootstrap.css adding
    wp_register_style('arun_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.4.1', 'all');
    wp_enqueue_style('arun_bootstrap_css');

    //bootstrap.js ading
    wp_register_script('arun_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', array(), '4.4.1', true);
    wp_enqueue_script('arun_bootstrap_js');
}
add_action('wp_enqueue_scripts', 'arun_css_js_adding');


/*================================
 For Adding Google Fonts CDN Paths
================================*/
function arun_google_font_cdn()
{
    wp_enqueue_style('arun_google_font', 'https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=New+Amsterdam&display=swap');
}
add_action('wp_enqueue_scripts', 'arun_google_font_cdn');


/*================================
 For Adding Bootstrap Icons CDN Paths
================================*/
function arun_bootstrap_icons_cdn()
{
    wp_enqueue_style('arun_bootstrap_icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
}
add_action('wp_enqueue_scripts', 'arun_bootstrap_icons_cdn');


/*================================
 For Adding Menu Section
================================*/
register_nav_menus(
    array('primary-menu' => 'Top Menu')
);


/*===================================================
 For Adding Featured Image section in Posts and Pages
===================================================*/
add_theme_support('post-thumbnails');


/*========================================
 For Adding Customizable Post Page Setting
========================================*/
function arunvptheme_customize_register($wp_customize)
{

    // Post title word limit
    $wp_customize->add_setting('post_page_title_words', array(
        'default' => 10, // Default number of words
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('post_page_title_words', array(
        'label' => __('Post Title Word Limit', 'vistaexpress'),
        'section' => 'post_page_section',
        'type' => 'number',
    ));

    // Post excerpt word limit
    $wp_customize->add_setting('post_page_excerpt_words', array(
        'default' => 20, // Default number of words
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('post_page_excerpt_words', array(
        'label' => __('Post Excerpt Word Limit', 'vistaexpress'),
        'section' => 'post_page_section',
        'type' => 'number',
    ));

    // "Read More" button color
    $wp_customize->add_setting('read_more_button_color', array(
        'default' => '#0073aa',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'read_more_button_color', array(
        'label' => __('Read More Button Color', 'vistaexpress'),
        'section' => 'post_page_section',
    )));

    // "Read More" button text
    $wp_customize->add_setting('read_more_button_text', array(
        'default' => __('Read More', 'vistaexpress'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('read_more_button_text', array(
        'label' => __('Read More Button Text', 'vistaexpress'),
        'section' => 'post_page_section',
        'type' => 'text',
    ));

    // Create a section for Post Page settings
    $wp_customize->add_section('post_page_section', array(
        'title' => __('Post Page Settings', 'vistaexpress'),
        'priority' => 30,
    ));
}
add_action('customize_register', 'arunvptheme_customize_register');


/*=====================================================
 For Adding Enable/Disable Control for New Post Section
=====================================================*/
function arunvptheme_customize_register_for_newposts_section($wp_customize) {

    // Add a custom section for the post scroll setting
    $wp_customize->add_section('post_scroll_section', array(
        'title'    => __('New Post Scroll Section', 'vistaexpress'),
        'priority' => 30,
    ));

    // Add a setting for enabling/disabling the post scroll section
    $wp_customize->add_setting('enable_post_scroll', array(
        'default'           => false,
        'sanitize_callback' => 'wp_validate_boolean', // Sanitization callback function
    ));
    

    // Add a control to toggle the post scroll section
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'enable_post_scroll_control', array(
        'label' => __('Enable Post Scroll Section', 'vistaexpress'),
        'section' => 'post_scroll_section', // New custom section
        'settings' => 'enable_post_scroll',
        'type' => 'checkbox', // Checkbox for toggle on/off
    )));
}
add_action('customize_register', 'arunvptheme_customize_register_for_newposts_section');


/*===============================================
 For Adding Sidebar & Footer Widgets in the Admin
===============================================*/
function arunvptheme_widgets_init()
{

    // For Sidebar Widget Area
    register_sidebar(array(
        'name'          => __('Post Page Sidebar', 'vistaexpress'),
        'id'            => 'post-page-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Col 1
    register_sidebar(array(
        'name'          => __('Footer Col Area 1', 'vistaexpress'),
        'id'            => 'footer-area-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Col 2
    register_sidebar(array(
        'name'          => __('Footer Col Area 2', 'vistaexpress'),
        'id'            => 'footer-area-2',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Col 3
    register_sidebar(array(
        'name'          => __('Footer Col Area 3', 'vistaexpress'),
        'id'            => 'footer-area-3',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Col 4
    register_sidebar(array(
        'name'          => __('Footer Col Area 4', 'vistaexpress'),
        'id'            => 'footer-area-4',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // For Footer Social Media Section
    register_sidebar(array(
        'name'          => __('Footer Social Media Section', 'vistaexpress'),
        'id'            => 'footer_social_section',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'arunvptheme_widgets_init');


/*===============================================
 For Adding Footer Copyright Section in the Admin
===============================================*/
function arunvptheme_customize_register_footer_copyright($wp_customize)
{
    // Add a section for the footer settings
    $wp_customize->add_section('arunvptheme_footer_section', array(
        'title' => __('Footer Copyright Settings', 'vistaexpress'),
        'priority' => 30,
    ));

    // Add a setting for the copyright text
    $wp_customize->add_setting('arunvptheme_copyright_text', array(
        'default' => '© Copyright 2024 | Vista Express | Arun Paul',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the copyright text
    $wp_customize->add_control('arunvptheme_copyright_text_control', array(
        'label' => __('Change Copyright Text', 'vistaexpress'),
        'description' => 'You can change copyright text from here',
        'section' => 'arunvptheme_footer_section',
        'settings' => 'arunvptheme_copyright_text',
        'type' => 'text',
    ));
}
add_action('customize_register', 'arunvptheme_customize_register_footer_copyright');


/*=========================
Function Code of Pagination
=========================*/
function arunvptheme_pagination()
{
    global $wp_query;

    $big = 999999999; // Need an unlikely integer

    $pages = paginate_links(array(
        'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'  => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total'   => $wp_query->max_num_pages,
        'type'    => 'array',
        'prev_text' => __('« Previous', 'vistaexpress'),
        'next_text' => __('Next »', 'vistaexpress'),
    ));

    if (is_array($pages)) {
        echo '<ul class="pagination">';
        foreach ($pages as $page) {
            echo "<li>$page</li>";
        }
        echo '</ul>';
    }
}