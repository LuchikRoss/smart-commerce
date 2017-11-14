<?php
/**
 * Semper Fi Lite: Customizer-Generate-Default-Options
 *
 * @package WordPress
 * @subpackage Semper_Fi
 * @since 14
 */


$my_theme = wp_get_theme();

/**
 * I don't want the following functions to run unless the defaults haven't been set */
if (get_theme_mod('semperfi_installed_and_set_defaults' . $my_theme->get('Version')) != 'true') {

    add_action( 'customize_register', 'semperfi_after_switch_theme_options' );
    
}

function semperfi_after_switch_theme_options () {

    /**
     * Request the Array of Options
     */
    require get_parent_theme_file_path( '/inc/customizer-options.php' );
    
    /*if (get_theme_mod('semperfi_installed_and_set_defaults') != 'true') { */

        foreach($semperfi_customizer_array_of_options as $option => $values) {

            set_theme_mod('semperfi_installed_and_set_defaults', 'true');

            if (get_theme_mod($option) == '') {

                set_theme_mod( $option, $semperfi_customizer_array_of_options[$option]['default'] );

            /*}*/
        }
    }
}

/**
 * I don't want the following functions to run unless the defaults haven't been set */
if (get_theme_mod('semperfi_installed_and_set_defaults' . $my_theme->get('Version')) != 'true') {

    
    
}

add_action( 'get_header', 'semperfi_for_wordpress_theme_preview' );

function semperfi_for_wordpress_theme_preview () {
    
    /**
     * Request the Array of All Customizer Options */
    require get_parent_theme_file_path( '/inc/customizer-options.php' );
    
    /**
     * Loop through all the options, plan is to check for blank options and set the to default */
    foreach($semperfi_customizer_array_of_options as $option => $values) {

        /**
         *  Here I check if the Customizer Option / get_theme_option(*option_name*) is blank */
        if (get_theme_mod($option) == '') {

            /**
             *  So the option is blank, lets set it to default */
            set_theme_mod( $option, $semperfi_customizer_array_of_options[$option]['default'] );

        }
    }
    
    /**
     * I want this code to run every time a new version is released, so I need to know what version this is */
    $my_theme = wp_get_theme();

    /**
     *  I only need this loop once so here I set a one of theme mod for the version to true */
    set_theme_mod('semperfi_installed_and_set_defaults' . $my_theme->get('Version'), 'true');

}


/**
 *  I use the code to visually Inspect that this function "semperfi_for_wordpress_theme_preview" actually works */
//echo 'semperfi_installed_and_set_defaults' . $my_theme->get('Version') . ' and ' . get_theme_mod('semperfi_installed_and_set_defaults');


/* * if get_theme_mod never existed lets generate the default setting
if (is_customize_preview()) { 
    require get_parent_theme_file_path( '/inc/customizer-options.php' );
    
    foreach($semperfi_customizer_array_of_options as $option => $values) {
        
        if (isset(get_theme_($option))) {
            
            set_theme_mod( $option, $semperfi_customizer_array_of_options[$option]['default'] );
            
        }   
    }
} /* */




/**
 * unset all the options with a default value for testing
 *
require get_parent_theme_file_path( '/inc/customizer-options.php' );

foreach($semperfi_customizer_array_of_options as $option => $values) {

    if (get_theme_mod($option) == $semperfi_customizer_array_of_options[$option]['default']) {

        set_theme_mod( $option, '' );

    }
}/* */
