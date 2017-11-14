<?php
/**
 * Semper Fi Lite: Customizer-Options
 *
 * @package WordPress
 * @subpackage Semper_Fi
 * @since 14
 */

/**
 * Request the Array of Options
 */
require get_parent_theme_file_path( '/inc/customizer-options.php' );

// Change Name of Background Image to just Background
$wp_customize->add_section( 'background_image', array(
    'title'     => 'Background',
    'priority'  => '9'));

// Array for duplicate Paneles
$check_for_duplicate_panels = array('Default');

// Array for duplicate Sections
$check_for_duplicate_sections = array('Default');

// Loop through and create the sections
foreach($semperfi_customizer_array_of_options as $key => $value) {
    
    foreach($value as $values => $data) {
        
        // Check if $values is at a "panel_title"
        if (($values == 'panel_title') && (!in_array($data, $check_for_duplicate_panels))) {
            
            // Create the Panel
            $wp_customize->add_panel(
                $data, array(
                    'priority'  => $value['panel_priority'],
                    'title'     => $data));

            // Add to Array and Stop future duplicate panels
            array_push($check_for_duplicate_panels, $data);

        }
        
        // Check if $values is at a "section_title"
        if (($values == 'section_title') && (!in_array($data, $check_for_duplicate_sections))) {

            // Create the Section
            $wp_customize->add_section(
                $data, array(
                    'panel'         => $value['panel_title'],
                    'priority'      => $value['section_priority'],
                    'title'         => $value['section_title']));

                // Add to Array and Stop future duplicate sections
                array_push($check_for_duplicate_sections, $data['section_id']);

        }
    }
}