<?php
/**
 * Semper Fi Lite: Customizer-Options
 *
 * @package WordPress
 * @subpackage Semper_Fi
 * @since 14
 */

/**
* The actual Array that everything is generated off of here in out
* Things like "priority" can be commented out if not needed
*/
$semperfi_customizer_array_of_options = array(

    // Color Example
    /*'titlecolor' => array(
        'css'               => 'nav h1 a {color: $',
        'default'           => '#ffffff',
        'label'             => __('Color', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Site Title', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'nav h1',
        'type'              => 'color'),*/

    
    // Font Example
    'titlefontstyle' => array(
        'css'               => 'nav h1 {font-family:$',
        'default'           => 'default',
        'label'             => __('Font', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 10,
        'priority'          => 10,
        'section_title'     => __('Menu Title', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'nav#for-mobile h1',
        'type'              => 'font'),

    
    // Image Example
    'publisher_logo_img' => array(
        'default'           => get_template_directory_uri() . '/images/publisher-logo.jpg',
        'label'             => __('Publisher Logo - 600px X 60px', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Publisher', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'img.microdata-publisher-logo',
        'type'              => 'img'),
    
    'square_logo_img' => array(
        'default'           => get_template_directory_uri() . '/images/moose-logo-151.jpg',
        'label'             => __('Square Logo - 151px X 151px', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '',
        'type'              => 'img'),
    
    'nav_logo_img' => array(
        'default'           => get_template_directory_uri() . '/images/moose-logo.jpg',
        'label'             => __('Navigation Logo', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Menu Title', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'img.nav-logo',
        'type'              => 'img'),
    
    /*'slide_first_img' => array(
        'default'           => get_template_directory_uri() . '/images/how-to-buy-a-silencer_carouselimg.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+1) .customizer_background',
        'type'              => 'img'),

    'slide_second_img' => array(
        'default'           => get_template_directory_uri() . '/images/how-to-buy-a-silencer_carouselimg.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+2) .customizer_background',
        'type'              => 'img'),

    'slide_third_img' => array(
        'default'           => get_template_directory_uri() . '/images/home-grid-threadedbarrel.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+3) .customizer_background',
        'type'              => 'img'),

    'slide_fourth_img' => array(
        'default'           => get_template_directory_uri() . '/images/Tandem-Skydive-Cody.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+4) .customizer_background',
        'type'              => 'img'),*/

    'advertise_1_img' => array(
        'default'           => get_template_directory_uri() . '/images/Chris-Tandem-Skydive.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(1)',
        'type'              => 'img'),

    'advertise_2_img' => array(
        'default'           => get_template_directory_uri() . '/images/Kara_Skydiving_Sitfly.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(2)',
        'type'              => 'img'),

    'advertise_3_img' => array(
        'default'           => get_template_directory_uri() . '/images/HALO-Skydives.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(3)',
        'type'              => 'img'),

    'advertise_4_img' => array(
        'default'           => get_template_directory_uri() . '/images/Head-Down-Freeflying-Casey-Heather-Paul.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(4)',
        'type'              => 'img'),

    'store-front_img' => array(
        'default'           => get_template_directory_uri() . '/images/schwarttzy-skyvan-chicago-lake-front-michigan.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Title', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front h3',
        'type'              => 'img'),

    'store-front_1_img' => array(
        'default'           => get_template_directory_uri() . '/images/Hybrid-Skydiving-Jerrid-Cody-Hunter-Mario-Jon-Tasha.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(1) h5',
        'type'              => 'img'),

    'store-front_2_img' => array(
        'default'           => get_template_directory_uri() . '/images/Kara_Skydiving_Sitfly.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(2) h5',
        'type'              => 'img'),

    'store-front_3_img' => array(
        'default'           => get_template_directory_uri() . '/images/Clinton-Skydive-Sunset-Flocking.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(3) h5',
        'type'              => 'img'),

    'store-front_4_img' => array(
        'default'           => get_template_directory_uri() . '/images/Head-Down-Freeflying-Casey-Heather-Paul.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(4) h5',
        'type'              => 'img'),

    'store-front_5_img' => array(
        'default'           => get_template_directory_uri() . '/images/Tandem-Skydive-Cody.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fifth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(5) h5',
        'type'              => 'img'),

    'store-front_6_img' => array(
        'default'           => get_template_directory_uri() . '/images/Klash-Tandem-Hanycam.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Sixth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(6) h5',
        'type'              => 'img'),

    'store-front_7_img' => array(
        'default'           => get_template_directory_uri() . '/images/Head-Down-Jenny-Steve.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Seventh Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(7) h5',
        'type'              => 'img'),

    'store-front_8_img' => array(
        'default'           => get_template_directory_uri() . '/images/undy-hundy-jon-klash-clint-hunter.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Eight Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(8) h5',
        'type'              => 'img'),

    'store-front_9_img' => array(
        'default'           => get_template_directory_uri() . '/images/astronaut-cats-red-dot.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Nineth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(9) h5',
        'type'              => 'img'),

    'woocommerce_shop_img' => array(
        'default'           => get_template_directory_uri() . '/images/Tandem-Skydive-Cody.jpg',
        'label'             => __('Image', 'semper-fi-lite'),
        'panel_title'       => __('WooCommerce', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Shop', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.shop',
        'type'              => 'img'),

    'categories_and_tags_img' => array(
        'default'           => get_template_directory_uri() . '/images/Clinton-Skydive-Sunset-Flocking.jpg',
        'label'             => __('Background - Cateories & tags', 'semper-fi-lite'),
        'panel_title'       => __('Blog', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Categories & Tags', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'section#categories-and-tags div.customizer-categories-and-tags',
        'type'              => 'img'),

    'default_header_img' => array(
        'default'           => get_template_directory_uri() . '/images/moose-logo.jpg',
        'label'             => __('Default Header Image', 'semper-fi-lite'),
        'panel_title'       => __('Blog', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Header', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header#title-and-image div.customizer-tite-image',
        'type'              => 'img'),

    'main_background_img' => array(
        'default'           => get_template_directory_uri() . '/images/moose-aaaaaa.jpg',
        'label'             => __('Background Image', 'semper-fi-lite'),
        'panel_title'       => __('Blog', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Background', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'main#the-article',
        'type'              => 'img'),



    // Range Example
    'title_size' => array(
        'css'               => 'nav h1 {font-size:$em;',
        'default'           => '2.22',
        'label'             => __('Title Font Size', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 10,
        'priority'          => 10,
        'section_title'     => __('Menu Title', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'nav h1',
        'type'              => 'range',
        'high'              => '12.00',
        'low'               => '0.00',
        'step'              => '.05',
        'units'             => 'em'),
    
    
    // Select
    
    'microdata_organization_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide All Social Icons', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'article#advertises section:nth-of-type(1)',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    /*'slider_visibility' => array(
        'default'           => true,
        'label'             => __('Display or Hide The Slider', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'article#advertises section:nth-of-type(1)',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),*/
    
    'advertise_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide All Social Icons', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Container Options', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'article#advertises',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    /*'slide_first_url' => array(
        'default'           => "#learn-to-skydive",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('First Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.slide section:first-of-type h3',
        'type'              => 'url'),*/
    
    'advertise_1_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Box', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'article#advertises section:nth-of-type(1)',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'advertise_2_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Box', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'article#advertises section:nth-of-type(2)',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'advertise_3_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Box', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'article#advertises section:nth-of-type(3)',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'advertise_4_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Box', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'article#advertises section:nth-of-type(4)',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_icon_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('All Social Icon', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => 'nav#for-mobile > ul.social',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_bitcoin_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Bitcoin - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.bitcoin a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_beer_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Beer - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.beer a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_phone_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Phone - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.phone a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_maps_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Maps - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.maps a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_compass_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Compass - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.compass a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_wordpress_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Wordpress - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.wordpress a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_facebook_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Facebook - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.facebook a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_twitter_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Twitter - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.twitter a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_youtube_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Youtube - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.youtube a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_yelp_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Yelp - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.yelp a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_instagram_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Instagram - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.instagram a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_linkin_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Linkin - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.linkin a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_reddit_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Reddit - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.reddit a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_soundcloud_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Soundcloud - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.soundcloud a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_steam_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Steam - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.steam a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_tachometer_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Tachometer - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.tachometer a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    'social_rocket_display' => array(
        'default'           => true,
        'label'             => __('Display or Hide', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Rocket - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.rocket a',
        'type'              => 'select',
        'choices' => array(
			true             => 'Visible',
			false            => 'Hidden')),
    
    
    // Text Example
    'woocommerce_shop_title' => array(
        'default'           => "The Store Front",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('WooCommerce', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Shop', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '.woocommerce-page header h2',
        'type'              => 'text'),
    
    'microdata_legalname' => array(
        'default'           => get_bloginfo('name'),
        'label'             => __('Company Legal Name - Microdata', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '',
        'type'              => 'text'),
    
    'microdata_phone_number' => array(
        'default'           => '+1-888-888-8888',
        'label'             => __('Company Phone Number - Microdata', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '',
        'type'              => 'text'),
    
    /*'slide_first_title' => array(
        'default'           => "Hacking XM & Onstar with Bluetooth",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+1) h2',
        'type'              => 'text'),

    'slide_first_sub_title' => array(
        'default'           => "Play Music, Answer Phone Calls, with the Factory Radio.",
        'label'             => __('Sub Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+1) p',
        'type'              => 'text'),
    
    'slide_second_title' => array(
        'default'           => "H3 HUMMER - Hidden Winch Mount",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+2) h2',
        'type'              => 'text'),

    'slide_second_sub_title' => array(
        'default'           => "When you got a 'Winch', being stuck is just temporary.",
        'label'             => __('Sub Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+2) p',
        'type'              => 'text'),
    
    'slide_third_title' => array(
        'default'           => "Hacking XM & Onstar with Bluetooth",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+3) h2',
        'type'              => 'text'),

    'slide_third_sub_title' => array(
        'default'           => "Play Music, Answer Phone Calls, with the Factory Radio.",
        'label'             => __('Sub Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+3) p',
        'type'              => 'text'),
    
    'slide_fourth_title' => array(
        'default'           => "Your H3's first lift kit",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+4) h2',
        'type'              => 'text'),

    'slide_fourth_sub_title' => array(
        'default'           => "Extended Schackles, High Clearance Leaf Spring Mounts, and Cranking the Torsion Bars.",
        'label'             => __('Sub Title', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'header.slide section:nth-of-type(99n+4) p',
        'type'              => 'text'),*/

    /*'backdrop_1' => array(
        'default'           => "Northmen Guild's Code of Ethics",
        'label'             => __('Title of First Random Page Choice', 'semper-fi-lite'),
        'panel_title'       => __('Random Page Display', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Random Page Choices', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.backdrop div',
        'type'              => 'text'),

    'backdrop_2' => array(
        'default'           => "Northmen Guild's Code of Ethics",
        'label'             => __('Title of Second Random Page Choice', 'semper-fi-lite'),
        'panel_title'       => __('Random Page Display', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Random Page Choices', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.backdrop div',
        'type'              => 'text'),

    'backdrop_3' => array(
        'default'           => "Northmen Guild's Code of Ethics",
        'label'             => __('Title of Third Random Page Choice', 'semper-fi-lite'),
        'panel_title'       => __('Random Page Display', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Random Page Choices', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.backdrop div',
        'type'              => 'text'),

    'backdrop_4' => array(
        'default'           => "Northmen Guild's Code of Ethics",
        'label'             => __('Title of Fourth Random Page Choice', 'semper-fi-lite'),
        'panel_title'       => __('Random Page Display', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Random Page Choices', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.backdrop div',
        'type'              => 'text'),*/

    'advertise_1' => array(
        'default'           => "WordPress",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(1) h3',
        'type'              => 'text'),

    'advertise_2' => array(
        'default'           => "HTML5",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(2) h3',
        'type'              => 'text'),

    'advertise_3' => array(
        'default'           => "CSS3",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(3) h3',
        'type'              => 'text'),

    'advertise_4' => array(
        'default'           => "JavaScript Free",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(4) h3',
        'type'              => 'text'),

    'store-front_title' => array(
        'default'           => "Semper Fi - Setting New Standards!",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Title', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front h3',
        'type'              => 'text'),

    'store-front_1_text' => array(
        'default'           => "HTML5 Standards that Define",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('First Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(1) h5',
        'type'              => 'text'),

    'store-front_2_text' => array(
        'default'           => "CSS3 Latest Evolutions",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Second Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(2) h5',
        'type'              => 'text'),

    'store-front_3_text' => array(
        'default'           => "JavaScript Free, Means Conflict Free",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Third Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(3) h5',
        'type'              => 'text'),

    'store-front_4_text' => array(
        'default'           => "A One Off WordPress Customizer Options Generator",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fourth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(4) h5',
        'type'              => 'text'),

    'store-front_5_text' => array(
        'default'           => "Built with Grid, Flex, and Font Scaling",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Fifth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(5) h5',
        'type'              => 'text'),

    'store-front_6_text' => array(
        'default'           => "Moble First Responsive Design",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Sixth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(6) h5',
        'type'              => 'text'),

    'store-front_7_text' => array(
        'default'           => "Woocommerce Shopping Cart Integration",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Seventh Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(7) h5',
        'type'              => 'text'),

    'store-front_8_text' => array(
        'default'           => "Built in Google Structured MicroData",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Eight Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(8) h5',
        'type'              => 'text'),

    'store-front_9_text' => array(
        'default'           => "A WordPress Theme by Schwarttzy",
        'label'             => __('Title', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Nineth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(9) h5',
        'type'              => 'text'),
    
    
    // Textarea Example
    /*'service_one_textarea' => array(
        'default'           => "Win Aviation provides aircraft leasing services to the Skydiving community.",
        'label'             => __('Paragraph', 'semper-fi-lite'),
        'panel_title'       => __('Services', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 10,
        'section_title'     => __('Service One', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '.service:nth-of-type(1) h3',
        'type'              => 'text'),*/

    
    // URL Example
    
    'microdata_facebook_url' => array(
        'default'           => "#",
        'label'             => __('Company Same As - Facebook', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '',
        'type'              => 'url'),
    
    'microdata_twitter_url' => array(
        'default'           => "#",
        'label'             => __('Company Same As - Twitter', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '',
        'type'              => 'url'),
    
    'microdata_youtube_url' => array(
        'default'           => "#",
        'label'             => __('Company Same As - YouTube', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '',
        'type'              => 'url'),
    
    'microdata_googleplus_url' => array(
        'default'           => "#",
        'label'             => __('Company Same As - Google Plus', 'semper-fi-lite'),
        'panel_title'       => __('Microdata for Structured Data', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Organization Schema', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => '',
        'type'              => 'url'),
    
    /*'slide_first_url' => array(
        'default'           => "#learn-to-skydive",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('First Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.slide section:first-of-type h3',
        'type'              => 'url'),

    'slide_second_url' => array(
        'default'           => "#learn-to-skydive",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Second Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.slide section:nth-of-type(2) h3',
        'type'              => 'url'),

    'slide_third_url' => array(
        'default'           => "#learn-to-skydive",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Third Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.slide section:nth-of-type(3) h3',
        'type'              => 'url'),

    'slide_fourth_url' => array(
        'default'           => "#learn-to-skydive",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Slider', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Fourth Slide', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article.slide section:nth-of-type(4) h3',
        'type'              => 'url'),*/

    'advertise_1_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('First Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(1) h3',
        'type'              => 'url'),

    'advertise_2_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Second Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(2) h3',
        'type'              => 'url'),

    'advertise_3_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Third Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(3) h3',
        'type'              => 'url'),

    'advertise_4_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Advertise', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Fourth Box', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#advertises section:nth-of-type(4) h3',
        'type'              => 'url'),

    'store-front_1_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('First Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(1) h5',
        'type'              => 'url'),

    'store-front_2_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Second Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(2) h5',
        'type'              => 'url'),

    'store-front_3_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Third Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(3) h5',
        'type'              => 'url'),

    'store-front_3_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Third Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(3) h5',
        'type'              => 'url'),

    'store-front_4_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Fourth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(4) h5',
        'type'              => 'url'),

    'store-front_5_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Fifth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(5) h5',
        'type'              => 'url'),

    'store-front_6_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Sixth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(6) h5',
        'type'              => 'url'),

    'store-front_7_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Seventh Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(7) h5',
        'type'              => 'url'),

    'store-front_8_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Eight Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(8) h5',
        'type'              => 'url'),

    'store-front_9_url' => array(
        'default'           => "#",
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Store Front', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Nineth Circle', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'article#store-front section:nth-of-type(9) h5',
        'type'              => 'url'),

    'social_bitcoin_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Bitcoin - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.bitcoin a',
        'type'              => 'url'),

    'social_beer_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Beer - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.beer a',
        'type'              => 'url'),

    'social_phone_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Phone - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.phone a',
        'type'              => 'url'),

    'social_maps_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Maps - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.maps a',
        'type'              => 'url'),

    'social_compass_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Compass - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.compass a',
        'type'              => 'url'),

    'social_wordpress_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Wordpress - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.wordpress a',
        'type'              => 'url'),

    'social_facebook_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Facebook - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.facebook a',
        'type'              => 'url'),

    'social_twitter_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Twitter - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.twitter a',
        'type'              => 'url'),

    'social_youtube_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Youtube - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.youtube a',
        'type'              => 'url'),

    'social_yelp_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Yelp - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.yelp a',
        'type'              => 'url'),

    'social_instagram_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Instagram - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.instagram a',
        'type'              => 'url'),

    'social_linkin_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Linkin - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.linkin a',
        'type'              => 'url'),

    'social_reddit_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Reddit - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.reddit a',
        'type'              => 'url'),

    'social_soundcloud_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Soundcloud - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.soundcloud a',
        'type'              => 'url'),

    'social_steam_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Steam - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.steam a',
        'type'              => 'url'),

    'social_tachometer_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Tachometer - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.tachometer a',
        'type'              => 'url'),

    'social_rocket_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Rocket - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.rocket a',
        'type'              => 'url'),

    'social_rocket_url' => array(
        'default'           => get_admin_url() . 'customize.php',
        'label'             => __('Link', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 106,
        'priority'          => 11,
        'section_title'     => __('Rocket - Social Icon', 'semper-fi-lite'),
        'section_priority'  => 11,
        'selector'          => 'nav#for-mobile > ul.social  li.rocket a',
        'type'              => 'url'),


    // Video Example
    /*'header_video' => array(
        'default'           => get_template_directory_uri() . '/images/tandem2.mp4',
        'label'             => __('Video', 'semper-fi-lite'),
        'panel_title'       => __('Navigation', 'semper-fi-lite'),
        'panel_priority'    => 10,
        'priority'          => 10,
        'section_title'     => __('Background', 'semper-fi-lite'),
        'section_priority'  => 10,
        'selector'          => '#customizer_header',
        'type'              => 'video'),*/

);