<?php

define('ROOT', get_template_directory_uri());
define('IMG', ROOT . '/img');
define('VIDEO', ROOT . '/video');

function replace_core_jquery_version() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

add_theme_support( 'post-thumbnails' );

include('include/clear.php');

include('include/cpt_doctors.php');
include('include/cpt_hiring.php');
include('include/formContacts.php');
include('include/formApply.php');

add_theme_support( 'menus' );

function front_scripts() {

// Home page
	if( is_page_template( array( 'templates/page-home.php' ) ) ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-home.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-index.js', false, false, 'in_footer');
	}

// Services page
	if( is_page_template( array( 'templates/page-services.php' ) ) ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-services.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-services.js', false, false, 'in_footer');
	}

// Insights page
	if( is_page_template( array( 'templates/page-insights.php' ) ) ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-insights.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-insights.js', false, false, 'in_footer');
	}

// Career page
	if( is_page_template( array( 'templates/page-career.php' ) ) ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-career.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-career.js', false, false, 'in_footer');
	}

// Contacts page
	if( is_page_template( array( 'templates/page-contacts.php' ) ) ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-contacts.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-contacts.js', false, false, 'in_footer');
	}

// Doctors page
	if( is_page_template( array( 'templates/page-doctors.php' ) ) ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-doctors.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-doctors.js', false, false, 'in_footer');
	}

// Single page
	if( is_single() ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-single.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-single.js', false, false, 'in_footer');
	}

	if( is_page() ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-page.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-page.js', false, false, 'in_footer');
	}

// 404 page
	if( is_404() ){
		wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles-404.css');
		wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts-404.js', false, false, 'in_footer');
	}

}
add_action( 'wp_enqueue_scripts', 'front_scripts' );

$user = wp_get_current_user();
if($user->display_name !== 'admin'){
	add_action('admin_head', 'admin_styles');
	function admin_styles() {
		wp_register_style( 'admin_styles', get_template_directory_uri() . '/css/styles-admin.css', false, '1.0.0' );
		wp_enqueue_style( 'admin_styles', get_template_directory_uri() . '/css/styles-admin.css', false, '1.0.0' );
	}
}

function front_variables(){
	if( isset($_GET["style"]) && $_GET["style"] == 'white' ){
		$style = 'white';
	} else {
		$style = 'dark';
	}

	wp_localize_script( 'scripts', 'data',
		array(
			'ajax' => admin_url('admin-ajax.php'),
			'theme' => get_template_directory_uri(),
			'style' => $style,
		)
	);

}
add_action( 'wp_enqueue_scripts', 'front_variables' );



if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

if( isset($_GET["style"])){
	setcookie("style", $_GET["style"], time()+$expiration, '/');
}