<?php
    function load_css() {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all'); 
        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all'); 
        wp_enqueue_style('bootstrap', 'style');
        wp_enqueue_style('style');
    }

    add_action('wp_enqueue_scripts', 'load_css');
    
    function load_js() {

        wp_enqueue_script('jquery');

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', 'jquery', false, true);
        wp_enqueue_script('bootstrap');
    }

    add_action('wp_enqueue_scripts', 'load_js');
    
    // Register Nav Walker class_alias
    function register_navwalker(){
        add_theme_support('post-thumbnails');

        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    // Theme Support
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'THEMENAME' ),
    ) );


    // Excerpt Length Control

    function set_excerpt_length(){
        return 45;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function wpb_init_widgets($id) {
    register_sidebar(array(
        'name'  => 'Sidebar',
        'id'    => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
    register_sidebar(array(
        'name'  => 'Box1',
        'id'    => 'box1',
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
    register_sidebar(array(
        'name'  => 'Box2',
        'id'    => 'box2',
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
    register_sidebar(array(
        'name'  => 'Box3',
        'id'    => 'box3',
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');