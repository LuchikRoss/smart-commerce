<?php
/*
Plugin Name: Example Plugin
Plugin URI:
Description: Example Plugin for home-work
Author: Rostyslav Naryzhniak
Author URI: https://ros10.000webhostapp.com
Version: 0.1

*/
add_action ("admin_menu", "addMenu");
function addMenu()
{
	add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu");
	add_submenu_page("example-options", "Option 1", "Option 1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
	echo "Hello World!";
}

function option1()
{
	echo "its first option for example";
}



add_action( 'woocommerce_before_header', 'art_wp_before_header');

	function art_wp_before_header (){
		echo 'Мой первый хук: woocommerce_before_header';
	}
	
	
$page_title='My New Settings Page';
$menu_title='New Settings';
$capability='manage_options';
$menu_slug='site-options';
$function='add_my_setting';
$icon_url='';
$position=4;

add_action( 'new_admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
	add_menu_page( $page_title, $menu_title, $capability, $menu_slug, 'myplugin/myplugin-admin.php', '', plugins_url( 'myplugin/images/icon.png' ), 6 );
}

function connected_scripts() {
	wp_enqueue_style( 'connected-style', get_stylesheet_uri() );
	wp_enqueue_style( 'my-style', plugins_url('example-plugin-1/css') . '/my-style.css' );
	if (is_single()){
		wp_enqueue_script( 'my-script', plugins_url('example-plugin-1/js') . '/ember-cli-build.js', array('jquery'), false, true );
	}
}

add_action( 'wp_enqueue_scripts', 'connected_scripts' );
