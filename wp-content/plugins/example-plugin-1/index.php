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
		add_menu_page("Example Options", "Menu Options", 4, "example-options", "exampleMenu");
		add_submenu_page("example-options", "Option 1", "API GET httpbin.org", 4, "example-option-1", "option1");
		add_submenu_page("example-options", "Option 2", "API GET interkassa", 4, "example-option-2", "option2");
}

		function exampleMenu(){
			echo "Example Options";
			global $wp_version;
			echo "<br />The installed version of WordPress (Global Variables): " . $wp_version . "<br /><br />";
			

}
	
		function option1(){
			echo "first option submenu";
			
			$response = wp_remote_get('http://httpbin.org/get?a=b&c=d');
			echo "<br /><br /> GET запрос на ресурс http://httpbin.org/get?a=b&c=d <br />" . wp_remote_retrieve_response_code( $response ) . " "; //> 200
			echo wp_remote_retrieve_response_message( $response ); //> OK
			
}
			
		function option2(){
			echo "second option submenu";
									
			$request = wp_remote_get( 'https://api.interkassa.com/v1/currency' );
			echo "<pre><b>"; 
		//	var_dump($request);
			$pins = json_decode( $request['body'], true );
			//echo $pins;
			//echo "</pre>";
			
			if( !empty( $pins['data'] ) ) {
			    //echo '<ul>';
			    //foreach( $pins['data'] as $pin  => $ckey) {
			        //echo '<li><a href="' . $pin['uah'] . '">' . $pin['note']. '</a></li>';
			    //    echo $ckey;
			    echo "Курс доллара сейчас (GET)" . "<br />";
				    echo "покупка в интеркассе: " . $pins['data']['USD']['UAH']['in'] . " грн.<br />";
			        echo "продажа в интеркассе: " . $pins['data']['USD']['UAH']['out'] . " грн.<br />";
			}
			    echo '</b>';


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


