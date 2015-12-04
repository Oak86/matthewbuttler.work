<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child Theme Definitions (Do Not Remove)
define( 'CHILD_THEME_NAME', __( 'Child Theme', 'Lovely' ) );
define( 'CHILD_THEME_URL', 'http://jtgrauke.com' );
define( 'CHILD_THEME_VERSION', '1.0' );

//* Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'grauke_scripts_styles' );
function grauke_scripts_styles() {

	wp_enqueue_script( 'grauke-responsive-menu', get_bloginfo( 'stylesheet_directory' ) . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700|Old+Standard+TT:400,400italic', array(), CHILD_THEME_VERSION );
}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom header
add_theme_support( 'custom-header', array(
	'header-selector' => '.site-title a',
	'flex-height'     => true,
	'height'		  => 200,
	'width'		  	  => 1080,
	'flex-width'      => true,
) );

//* Remove comment form allowed tags
add_filter( 'comment_form_defaults', 'grauke_remove_comment_form_allowed_tags' );
function grauke_remove_comment_form_allowed_tags( $defaults ) {
	$defaults['comment_notes_after'] = '';
	return $defaults;
}

//* Modify the size of the Gravatar in the entry comments
add_filter( 'genesis_comment_list_args', 'grauke_comments_gravatar' );
function grauke_comments_gravatar( $args ) {
	$args['avatar_size'] = 100;
	return $args;
}

//* Change the footer text
add_filter('genesis_footer_creds_text', 'grauke_footer_creds_filter');
function grauke_footer_creds_filter( $creds ) {
	$creds = '[footer_copyright] &middot; Blog Design by <a href="http://bloomblogshop.com">Bloom</a>.';
	return $creds;
}

//* Customize the entry meta in the entry header (requires HTML5 theme support)
add_filter( 'genesis_post_info', 'jg_post_info_filter' );
function jg_post_info_filter($post_info) {
	$post_info = '[post_date]';
	return $post_info;
}

//* Customize the entry meta in the entry footer (requires HTML5 theme support)
add_filter( 'genesis_post_meta', 'jg_post_meta_filter' );
function jg_post_meta_filter($post_meta) {
	$post_meta = '[post_comments] [post_categories]';
	return $post_meta;
}

//* Unregister secondary navigation menu
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'genesis' ) ) );

//* Remove the header right widget area
unregister_sidebar( 'header-right' );

//* Remove site layouts
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );

//* Remove the secondary sidebar
unregister_sidebar( 'sidebar-alt' );