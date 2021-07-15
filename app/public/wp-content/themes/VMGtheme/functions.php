<?php 


function vmgtheme_files() {

    //enqueing CSS
        wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('slickCSS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');


    //enqueing JS
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
        wp_enqueue_script('fontAwesome', 'https://kit.fontawesome.com/24bc428ad4.js');
        wp_enqueue_script('slickJS', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), 1.0, true);

}
add_action('wp_enqueue_scripts', 'vmgtheme_files');

/* THEME SUPPORT */
add_theme_support('post-thumbnails');
add_theme_support('menus');

/* CUSTOM IMAGE SIZES */
add_image_size('servicesIcon', 50, 50, true);
add_image_size('processThumbnail', 466, 232, true);
add_image_size('aboutUsThumbnail', 466, 440, true);

/* CUSTOM LOGO */
function vmg_custom_logo() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 42,
		'width'       => 131,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'vmg_custom_logo' );

/* REGISTRATION OF FOOTER MENUs */
function footer_menu() {
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu',
            'footer-extra-menu' => 'Extra Footer Menu',
        )
    );
}
add_action( 'init', 'footer_menu' );



// REMOVING CONTENT EDITOR FROM PAGES

//HeroPage
function hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    $homepgname = get_the_title($post_id);
    if($homepgname == 'Hero'){ 
        remove_post_type_support('page', 'editor');
        }
//Our Clients Page
    $ourClients = get_the_title($post_id);
    if($homepgname == 'Our Clients'){ 
        remove_post_type_support('page', 'editor');
        }

//Social Media Links Page
    $socialMediaLinks = get_the_title($post_id);
    if($homepgname == 'Social Media Links'){ 
        remove_post_type_support('page', 'editor');
        }
}
add_action( 'admin_head', 'hide_editor' );


/* CUSTOM POST TYPES */
function vmg_post_types() {

    //custom post type for services/what we do
    register_post_type('service', array(
        'public' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service',
        ),
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true
    ));

    //custom post type for services/what we do
    register_post_type('process', array(
        'public' => true,
        'labels' => array(
            'name' => 'Our Process',
            'add_new' => 'Add New Process',
            'add_new_item' => 'Add New Process',
            'edit_item' => 'Edit Process',
            'all_items' => 'All Processes',
            'singular_name' => 'Process'
        ),
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true
    ));

    //custom post type for industries we serve
    register_post_type('industries', array(
        'public' => true,
        'labels' => array(
            'name' => 'Our Industries',
            'add_new' => 'Add New Industrie',
            'add_new_item' => 'Add New Industrie',
            'edit_item' => 'Edit Industrie',
            'all_items' => 'All Industries',
            'singular_name' => 'Industrie'
        ),
        'menu_icon' => 'dashicons-admin-generic',
        'supports' => array('title', 'editor'),
        'has_archive' => true
    ));

    //custom post type for case studies
    register_post_type('casestudies', array(
        'public' => true,
        'labels' => array(
            'name' => 'Case Studies',
            'add_new' => 'Add New Case Study',
            'add_new_item' => 'Add New Case Study',
            'edit_item' => 'Edit Case Study',
            'all_items' => 'All Case Studies',
            'singular_name' => 'Case Study'
        ),
        'menu_icon' => 'dashicons-chart-bar',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'taxonomies'  => array( 'category' ),
    ));

}
add_action('init', 'vmg_post_types');

// ADDING SUPPORT FOR SVG CLIENT LOGOS
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
add_filter('upload_mimes', 'add_file_types_to_uploads');

