<?php

function buson_setup(){

    load_theme_textdomain('buson', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'slider', 'service', 'cases', 'teams', 'testimonials'));

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'buson' ),
        'footer_menu'  => __( 'Footer Menu', 'buson' ),
    ) );
}
add_action('after_setup_theme', 'buson_setup');

function buson_theme_scripts() {
    // CSS Load
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );

    // JS Load
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'buson_theme_scripts' );


// Register Custom Post

function buson_cpt_init(){

   
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Slider', 'buson' ),
        'new_item'              => __( 'New Slider', 'buson' ),
        'edit_item'             => __( 'Edit Slider', 'buson' ),
        'view_item'             => __( 'View Slider', 'buson' ),
        'all_items'             => __( 'All Sliders', 'buson' ),
        'search_items'          => __( 'Search Sliders', 'buson' ),
        'parent_item_colon'     => __( 'Parent Sliders:', 'buson' ),
        'not_found'             => __( 'No Sliders found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'buson' ),
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );
    
    register_post_type('slider', $args);

    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Service', 'buson' ),
        'new_item'              => __( 'New Service', 'buson' ),
        'edit_item'             => __( 'Edit Service', 'buson' ),
        'view_item'             => __( 'View Service', 'buson' ),
        'all_items'             => __( 'All Services', 'buson' ),
        'search_items'          => __( 'Search Services', 'buson' ),
        'parent_item_colon'     => __( 'Parent Services:', 'buson' ),
        'not_found'             => __( 'No Services found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'buson' ),
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    
    register_post_type('service', $args);
    
    $labels = array(
        'name'                  => _x( 'Cases', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Case', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Cases', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Case', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Case', 'buson' ),
        'new_item'              => __( 'New Case', 'buson' ),
        'edit_item'             => __( 'Edit Case', 'buson' ),
        'view_item'             => __( 'View Case', 'buson' ),
        'all_items'             => __( 'All Cases', 'buson' ),
        'search_items'          => __( 'Search Cases', 'buson' ),
        'parent_item_colon'     => __( 'Parent Cases:', 'buson' ),
        'not_found'             => __( 'No Cases found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Cases found in Trash.', 'buson' ),
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cases' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    
    register_post_type('cases', $args);

    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Team', 'buson' ),
        'new_item'              => __( 'New Team', 'buson' ),
        'edit_item'             => __( 'Edit Team', 'buson' ),
        'view_item'             => __( 'View Team', 'buson' ),
        'all_items'             => __( 'All Teams', 'buson' ),
        'search_items'          => __( 'Search Teams', 'buson' ),
        'parent_item_colon'     => __( 'Parent Teams:', 'buson' ),
        'not_found'             => __( 'No Teams found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Teams found in Trash.', 'buson' ),
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'teams' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    
    register_post_type('teams', $args);

    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'buson' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'buson' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'buson' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'buson' ),
        'add_new'               => __( 'Add New', 'buson' ),
        'add_new_item'          => __( 'Add New Testimonial', 'buson' ),
        'new_item'              => __( 'New Testimonial', 'buson' ),
        'edit_item'             => __( 'Edit Testimonial', 'buson' ),
        'view_item'             => __( 'View Testimonial', 'buson' ),
        'all_items'             => __( 'All Testimonials', 'buson' ),
        'search_items'          => __( 'Search Testimonials', 'buson' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'buson' ),
        'not_found'             => __( 'No Testimonials found.', 'buson' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'buson' ),
        
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    
    register_post_type('testimonials', $args);
}
add_action('init', 'buson_cpt_init');

// Buson Register Sidebar

function buson_widgets_init() {
    // Main Sidebar
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'buson' ),
        'id'            => 'rsidebar',
        'description'   => __( 'Sidebar will shown in Blog / Catagory / Page.', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    // Footer 1
    register_sidebar( array(
        'name'          => __( 'Footer  Widget 1', 'buson' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    // Footer 2
    register_sidebar( array(
        'name'          => __( 'Footer  Widget 2', 'buson' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );  
}
add_action( 'widgets_init', 'buson_widgets_init' );


// Buson Options Page


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('Theme General Settings','buson'),
		'menu_title'	=> __('Theme Settings','buson'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Header Settings','buson'),
		'menu_title'	=> __('Header','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme About Settings','buson'),
		'menu_title'	=> __('About','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Request Settings','buson'),
		'menu_title'	=> __('Request','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Contact Settings','buson'),
		'menu_title'	=> __('Contact','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Footer Settings','buson'),
		'menu_title'	=> __('Footer','buson'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


