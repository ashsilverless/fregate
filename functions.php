<?php
/**
 * fregateisland functions and definitions
 *
 * @package fregateisland
 */

/****************************************************/
/*                       Hooks                       /
/****************************************************/

/* Enqueue scripts and styles */
add_action('wp_enqueue_scripts', 'fregateisland_scripts');

/* Add Menus */
add_action('init', 'fregateisland_custom_menu');

/* Dashboard Config */
add_action('wp_dashboard_setup', 'fregateisland_dashboard_widget');

/* Dashboard Style */
add_action('admin_head', 'fregateisland_custom_fonts');

/* Remove Default Menu Items */
add_action('admin_menu', 'fregateisland_remove_menus');

/* Change Posts Columns */
add_filter('manage_posts_columns', 'fregateisland_manage_columns');

/* Reorder Admin Menu */
add_filter('custom_menu_order', 'fregateisland_reorder_menu');
add_filter('menu_order', 'fregateisland_reorder_menu');

/* Remove Comments Link */
add_action('wp_before_admin_bar_render', 'fregateisland_manage_admin_bar');

/* Remove Admin Bar */
add_action('after_setup_theme', 'fregateisland_remove_admin_bar');

/* Add Custom Post Types and Taxonomies */
require_once ('custom-post-types.php');

/****************************************************/
/*                     Functions                     /
/****************************************************/

function fregateisland_scripts() {
	wp_enqueue_style( 'fregateisland-style', get_stylesheet_uri() );
	wp_enqueue_script( 'fregateisland-core-js', get_template_directory_uri() . '/inc/js/compiled.js', array('jquery'), true);
	//wp_enqueue_script( 'fregateisland-owl-js', get_template_directory_uri() . '/inc/js/owl.carousel.min.js', array('jquery'), true);
}

// add async and defer attributes to enqueued scripts
function fregateisland_script_loader_tag($tag, $handle, $src) {
	if ($handle === 'my-plugin-javascript-handle') {
		if (false === stripos($tag, 'async')) {
			$tag = str_replace(' src', ' async="async" src', $tag);
		}
		if (false === stripos($tag, 'defer')) {
			$tag = str_replace('<script ', '<script defer ', $tag);
		}
	}
	return $tag;
}
add_filter('script_loader_tag', 'fregateisland_script_loader_tag', 10, 3);

function fregateisland_custom_menu() {
	register_nav_menus(array(
		'upper-menu' => __( 'Main Menu' ),
		'footer-menu' => __( 'Footer Menu' ),
	));
}
add_action( 'init', 'fregateisland_custom_menu' );

function fregateisland_dashboard_widget() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'fregateisland Support', 'fregateisland_dashboard_help');
}

function fregateisland_dashboard_help() {
	echo file_get_contents(__DIR__ . "/admin-settings/dashboard.html");
}

function fregateisland_custom_fonts() {
	echo '<style type="text/css">' . file_get_contents(__DIR__ . "/admin-settings/style-admin.css") . '</style>';
}

function fregateisland_stylesheet() {
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'login_enqueue_scripts', 'fregateisland_stylesheet' );



function banner_admin_script() {
	global $post_type;
	if ( $post_type == 'map_item' )
		wp_enqueue_script( 'map-script', get_template_directory_uri().'/admin-settings/admin.js', '', '', true ); // "TRUE" - ADDS JS TO FOOTER
}
// Enter custom JS TO ADMIN AREA
add_action( 'admin_print_scripts-post-new.php', 'banner_admin_script', 11 );
add_action( 'admin_print_scripts-post.php', 'banner_admin_script', 11 );


function fregateisland_remove_menus(){
	remove_menu_page( 'edit-comments.php' ); //Comments
}

function fregateisland_manage_columns($columns) {
	unset($columns["comments"]);
	return $columns;
}

function fregateisland_reorder_menu() {
    return array(
		'index.php',                        // Dashboard
		'separator1',                       // --Space--
		'edit.php',                         // Posts
		'edit.php?post_type=page',          // Pages
		'upload.php',                       // Media
		'separator2',                       // --Space--
		'themes.php',                       // Appearance
		'plugins.php',                      // Plugins
		'users.php',                        // Users
		'tools.php',                        // Tools
		'options-general.php',              // Settings
		'wpcf7',                            // Contact Form 7
   );
}

function fregateisland_manage_admin_bar(){
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}


if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Page Leaders',
		'menu_title'	=> 'Page Leaders',
		'menu_slug' 	=> 'site-leaders',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function fregateisland_remove_admin_bar() {
	show_admin_bar(false);
}

/* Disable Gutenburg */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

