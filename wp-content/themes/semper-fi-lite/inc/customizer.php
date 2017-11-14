<?php
/**
 * Semper Fi Lite: Customizer
 *
 * @package WordPress
 * @subpackage Semper_Fi
 * @since 14
 */

// The following is "Schwarttzy's Customizer", an array generated customzier
function semperfi_customize_register($wp_customize) {


    /**
     * Request the Array of Google Fonts
     */
    require get_parent_theme_file_path( '/inc/google-fonts.php' );


    /**
     * Request the Code to Generate the Panels and Sections
     */
    require get_parent_theme_file_path( '/inc/customizer-panels-sections.php' );


    /**
	 * This creates the ablity for a plugin to hook into the customizer generator
	 *
	 * @since Semper Fi 14
	 *
	 * @param $num_sections integer
	 */

    if (function_exists('semper_fi_add_customizer_array')) {

        // Define it as an array, otherwise errors, because this will be found in the plugin
        $semper_fi_plugin_add_to_array = array();

        // This is the hook to target for a plugin to link in new customizer features
        do_action( 'hook_semper_fi_plugin_customizer_options' );

        // Here I'm pushing the extra features into the orginal array so that they'll get generated
        $semperfi_customizer_array_of_options = array_merge($semperfi_customizer_array_of_options, semper_fi_add_customizer_array( $semper_fi_plugin_add_to_array ));

    }


    //Fix the Odd Ball Factory WordPress Defaults
    $wp_customize->get_control( 'background_color' )->section = 'background_image';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial( 'background_color', array('selector' => '#customizer_background'));
    $wp_customize->get_control( 'site_icon' )->section = 'background_image';
    $wp_customize->get_control( 'blogname' )->section = 'site_title';
    $wp_customize->get_control( 'blogdescription' )->section = 'tagline';
    
    
    //Check for Duplicate Selectors
    $check_for_duplicate_selectors = array('Default');
    
    
    /**
	 * Create $wp_customize->add_setting , add_control, get_setting($option)->transport, and selective_refresh->add_partial for all the options
	 *
	 * @since Semper Fi 14
	 *
	 * @param $num_sections integer
	 */

        foreach($semperfi_customizer_array_of_options as $option => $values) {
            
            // Add Color Changing option to Customizer
            if ($values['type'] == 'color') {

                $wp_customize->add_setting( $option, array(
                    'default' => $values['default'],
                    'sanitize_callback' => 'sanitize_hex_color'));

                $wp_customize->add_control( new WP_Customize_Color_Control( 
                    $wp_customize,
                    $option . '_control',
                    array(
                        'section'   => $values['section_title'],
                        'label'     => $values['label'],
                        'settings'  => $option)));

            }

            
            // Add a font selector to Customizer
            if ($values['type'] == 'font') {

                $wp_customize->add_setting( $option, array(
                    'default' => 'Default',
                    'sanitize_callback' => 'esc_textarea'));

                $wp_customize->add_control( $option . '_control', array(
                    'section'   => $values['section_title'],
                    'label'     => $values['label'],
                    'priority'  => $values['priority'],
                    'type'      => 'select',
                    'settings'  => $option,
                    'choices'   => $finalized_google_font_array));

            }

            // Add a font selector to Image
            if ($values['type'] == 'img') {

                $wp_customize->add_setting( $option, array(
                    'default' => $values['default'],
                    'sanitize_callback' => 'esc_url_raw'));

                $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $option . '_control', array(
                    'section'   => $values['section_title'],
                    'label'     => $values['label'],
                    'priority'  => $values['priority'],
                    'settings'  => $option,)));

            }

            // Add a font selector to Radio
            if ($values['type'] == 'radio') {

                $wp_customize->add_setting( $option , array(
                    'default' => $values['default'],
                    'sanitize_callback' => 'esc_textarea'));

                $wp_customize->add_control( $option , array(
                    'section'       => $values['section_title'],
                    'label'         => $values['label'],
                    'priority'      => $values['priority'],
                    'type'          => 'radio',
                    'choices'       => $values['choices'] ));

            }

            // Add a font selector to Range
            if ($values['type'] == 'range') { 

                // Range is cool and all, but the accuracy sucks if you have more than 5 options, so lets just build arrays for a select type

                $stepping = range($values['low'], $values['high'], (1 * ($values['step'])));

                $array_choices = array_combine($stepping, $stepping);

                $wp_customize->add_setting( $option, array(
                    'default' => $values['default'],
                    'sanitize_callback' => 'esc_textarea'));

                $wp_customize->add_control( $option . '_control', array(
                    'section'   => $values['section_title'],
                    'label'     => $values['label'],
                    'priority'  => $values['priority'],
                    'type'      => 'select',
                    'settings'  => $option,
                    'choices'   => $array_choices));

                // Clear out the Array for the next data set
                unset($array_choices);

            }

            // Add a font selector to Select
            if ($values['type'] == 'select') {

                $wp_customize->add_setting( $option, array(
                    'default' => $values['default'],
                    'sanitize_callback' => 'esc_textarea'));

                $wp_customize->add_control( $option . '_control', array(
                    'choices'   => $values['choices'],
                    'label'     => $values['label'],
                    'priority'  => $values['priority'],
                    'settings'  => $option,
                    'section'   => $values['section_title'],
                    'type'      => 'select' ));

            }
            
            // Add a Text box to Customizer
            if ($values['type'] == 'text') {

                $wp_customize->add_setting( $option, array(
                    'default' => $values['default'],
                    'sanitize_callback' =>  'esc_textarea'));

                $wp_customize->add_control( $option . '_control', array(
                    'label'     => $values['label'],
                    'priority'  => $values['priority'],
                    'section'   => $values['section_title'],
                    'settings'  => $option,
                    'type'      => 'text' ));

            }
            
            // Add a Textarea box to Customizer
            if ($values['type'] == 'textarea') {

                $wp_customize->add_setting( $option, array('default' => $values['default'], 'sanitize_callback' =>  'esc_textarea'));

                $wp_customize->add_control( $option . '_control', array(
                    'label'     => $values['label'],
                    'priority'  => $values['priority'],
                    'section'   => $values['section_title'],
                    'settings'  => $option,
                    'type'      => 'textarea' ));

            }
            
            // Add a URL box to Customizer
            if ($values['type'] == 'url') {

                $wp_customize->add_setting( $option, array(
                    'default' => $values['default'],
                    'sanitize_callback' => 'esc_url'));

                $wp_customize->add_control( $option . '_control', array(
                    'description'   => '',
                    'label'         => $values['label'],
                    'priority'      => $values['priority'],
                    'section'       => $values['section_title'],
                    'settings'      => $option,
                    'type'          => 'url'));

            }

            if ($values['type'] == 'video') {

                $wp_customize->add_setting( $option, array(
                    'sanitize_callback' => 'esc_url') );
                
                $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, $option . '_control', array(
                    'label'     => $values['label'],
                    'priority'  => $values['priority'],
                    'mime_type' => 'video',
                    'section'   => $values['section_title'],
                    'settings'  => $option))
                );

            }
                
            if ((array_key_exists ('selector', $values)) && (!in_array($values['selector'], $check_for_duplicate_selectors))) {

                $wp_customize->get_setting( $option )->transport = 'postMessage';

                $wp_customize->selective_refresh->add_partial( $option, array('selector'  => $values['selector']));

                // Add to Array and Stop future duplicate selectors
                array_push($check_for_duplicate_selectors, $values['selector']);

            }

        }

} add_action( 'customize_register', 'semperfi_customize_register' );