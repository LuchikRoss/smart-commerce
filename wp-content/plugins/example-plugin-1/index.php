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

	function addMenu(){
		add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu");
		add_submenu_page("example-options", "Option 1", "Option 1", 4, "example-option-1", "option1");
		add_submenu_page("example-options", "Option 2", "Option 2", 4, "example-option-2", "option2");
}

		function exampleMenu(){
			echo "Example Options";
			global $wp_version;
			echo "<br />The installed version of WordPress (Global Variables): " . $wp_version;
}
	
		function option1(){
			echo "first option submenu";
}
	
		function option2(){
			echo "second option submenu";
}


		/* new admin menu settings */
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




