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
