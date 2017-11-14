<?php
/**
 * Semper Fi Lite: Customizer-CSS-generator
 *
 * @package WordPress
 * @subpackage Semper_Fi
 * @since 14
 */


if (is_customize_preview()) {
    add_action('wp_head', 'semperfi_echo_theme_mod_css', 1);
    function semperfi_echo_theme_mod_css() {

        /**
         * Request the Array of Options
         */
        require get_parent_theme_file_path( '/inc/customizer-options.php' );

        // Start building the single echo
        $semperfi_customizer_css = "\n" . '<!-- Semper Fi - Custom Google Font Choices -->' . "\n";

        // Array all used fonts
        $check_for_duplicate_fonts = array('','default');

        /**
         * Loop through and grab all the fonts into an array
         */
        foreach($semperfi_customizer_array_of_options as $option => $values) {

            if ($values['type'] == 'font') {

                if (!in_array(get_theme_mod($option), $check_for_duplicate_fonts)) {

                    array_push($check_for_duplicate_fonts, get_theme_mod($option));

                }
            }
        }
        
        

        $semperfi_last_of_fonts = end($check_for_duplicate_fonts);
        
        if ($semperfi_last_of_fonts != 'default') {

            $semperfi_customizer_css .= '<link href="http://fonts.googleapis.com/css?family=';

            /**
             * Create the Google Font Request Link
             */
            foreach($check_for_duplicate_fonts as $option => $values) {

                if (($values != 'default') && ($values != '')) {

                    if ($values != $semperfi_last_of_fonts) {

                        $semperfi_customizer_css .= $values . '|';

                    }

                    elseif (($values == $semperfi_last_of_fonts)) {

                        $semperfi_customizer_css .= $values;

                    }
                }
            }

            // Google Font Linking is Finished
            $semperfi_customizer_css .= '" rel="stylesheet">'  . "\n";
            
        }

        // On to CSS Portion now
        $semperfi_customizer_css .= '<!-- Semper Fi - Customizer CSS Styling -->' . "\n";
        $semperfi_customizer_css .= '<style type="text/css" media="screen">' . "\n";


        /**
         * Generate that Customizer CSS
         */
        foreach($semperfi_customizer_array_of_options as $option => $values) {

            // Grab on the ones that need CSS and have a value other that '' or the default value
            if ((array_key_exists('css', $values)) && (get_theme_mod($option) != '') && (get_theme_mod($option) != $values['default']) ) {

                if (!array_key_exists('transparency', $values)) {
                    
                    // Most don't require an array of CSS
                    if (!is_array ($values['css'])) {
                        
                        // Remove the "+" from option for CSS to work
                        if ($values['type'] == 'font') {
                            
                            $edit_font_name = preg_replace('/[^a-zA-Z0-9]+/', ' ', get_theme_mod($option));
                            
                            $values['css'] = str_replace("$", $edit_font_name, $values['css']);
                            
                            $semperfi_customizer_css .= $values['css'] . ";}\n";
                            
                        }
                        
                        // Everything Else
                        else {

                            $values['css'] = str_replace("$", get_theme_mod($option), $values['css']);

                            $values['css'] = str_replace("@", abs(get_theme_mod($option)), $values['css']);

                            $semperfi_customizer_css .= $values['css'] . ";}\n";
                        
                        }
                    }

                    // For those that require and array of CSS
                    else {

                        foreach ($values['css'] as $value => $css) {

                            //echo $css . ' ';

                        }
                    }
                }

                // For RGBA Color changes
                elseif (array_key_exists('transparency', $values)) {

                    if ( strlen(get_theme_mod($option)) == 7 ) {

                        $r = hexdec(substr(get_theme_mod($option), 1, 2));
                        $g = hexdec(substr(get_theme_mod($option), 3, 2));
                        $b = hexdec(substr(get_theme_mod($option), 5, 2));

                    }

                    elseif ( strlen(get_theme_mod($option)) == 4 ) {

                        $r = hexdec(str_repeat(substr(get_theme_mod($option), 1, 1), 2));
                        $g = hexdec(str_repeat(substr(get_theme_mod($option), 2, 1), 2));
                        $b = hexdec(str_repeat(substr(get_theme_mod($option), 3, 1), 2));

                    }

                    else {

                        $r = '0';
                        $g = '0';
                        $b = '0';
                    }

                    $rgba = 'rgba(' . $r . ', ' . $g . ', ' . $b . ', .' . get_theme_mod($values['transparency']) . ')' ;

                    $values['css'] = str_replace("$", $rgba, $values['css']);

                    $semperfi_customizer_css .= $values['css'] . ";}\n";

                }
            }


            // For RGBA color changes only in Alpha
            if ((array_key_exists('transparency', $values)) && (get_theme_mod($option) == $values['default']) && (get_theme_mod($values['transparency']) != $semperfi_customizer_array_of_options[$values['transparency']]['default']) && (get_theme_mod($values['transparency']) != '')) {

                if ( strlen(get_theme_mod($option)) == 7 ) {

                    $r = hexdec(substr(get_theme_mod($option), 1, 2));
                    $g = hexdec(substr(get_theme_mod($option), 3, 2));
                    $b = hexdec(substr(get_theme_mod($option), 5, 2));

                }

                elseif ( strlen(get_theme_mod($option)) == 4 ) {

                    $r = hexdec(str_repeat(substr(get_theme_mod($option), 1, 1), 2));
                    $g = hexdec(str_repeat(substr(get_theme_mod($option), 2, 1), 2));
                    $b = hexdec(str_repeat(substr(get_theme_mod($option), 3, 1), 2));

                }

                else {

                    $r = '0';
                    $g = '0';
                    $b = '0';
                }

                $rgba = 'rgba(' . $r . ', ' . $g . ', ' . $b . ', .' . get_theme_mod($values['transparency']) . ')' ;

                $values['css'] = str_replace("$", $rgba, $values['css']);

                $semperfi_customizer_css .= $values['css'] . ";}\n";

            }
        }

        // Closing out the CSS Editing
        $semperfi_customizer_css .= '</style>' . "\n";
        $semperfi_customizer_css .= '<!-- Semper Fi - End Customizer CSS Styling -->' . "\n";
        $semperfi_customizer_css .= "\n";

        // Update the Temporary saving location
        set_theme_mod( 'semperfi_theme_updated', $semperfi_customizer_css );
    }
}


// Only update Setting after a save
add_action( 'customize_save_after', 'semperfi_theme_mod_css_compressed' );
function semperfi_theme_mod_css_compressed() {

    set_theme_mod( 'semperfi_theme_mod_css_compressed', get_theme_mod('semperfi_theme_updated') );

}


// Switch between Saved Customizer Settings and Editing Customizer
add_action('wp_head', 'semperfi_css_customizer', 1);
function semperfi_css_customizer() {
    
    if (!is_customize_preview()) {
    
        echo get_theme_mod('semperfi_theme_mod_css_compressed');
    
    }
    
    else {
    
        echo get_theme_mod('semperfi_theme_updated');
        
    }
    
}