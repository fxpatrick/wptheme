<?php 
    // Register Nav_Walker class_alias
    require_once('wp-bootstrap-navwalker.php');

    // Theme Suppport 
    function wpb_theme_setup(){
        add_theme_support('post-thumbnails');

        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));
        
        // Posts Format
        add_theme_support('post-formats', array(
            'aside', 'gallery'
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');

    // Excerpt length control
    function set_excerpt_length(){
        return 20;
    }

     add_filter('excerpt_length', 'set_excerpt_length');

    // Widget Locations
    function wpb_init_widgets($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id'   => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Box1',
            'id'   => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Box2',
            'id'   => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Box3',
            'id'   => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h4>'
        ));
    }

    add_action( 'widgets_init', 'wpb_init_widgets' );

?>