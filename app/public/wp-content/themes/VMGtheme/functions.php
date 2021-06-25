<?php 


function vmgtheme_files() {

    //enqueing CSS
        wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');


    //enqueing JS
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
        wp_enqueue_script('fontAwesome', 'https://kit.fontawesome.com/24bc428ad4.js');

}
add_action('wp_enqueue_scripts', 'vmgtheme_files');

/* THEME SUPPORT */
add_theme_support('post-thumbnails');
add_theme_support('menus');

//custom site logo
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
}
add_action( 'admin_head', 'hide_editor' );


