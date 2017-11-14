<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit; ?><?php

// Global Content Width, Kind of a Joke with this theme, lol
if (!isset($content_width)) $content_width = 1350;

// Ladies, Gentalmen, boys and girls let's start our engines
add_action('after_setup_theme', 'semperfi_setup');

if (!function_exists('semperfi_setup')):

function semperfi_setup() {

global $content_width; 
			
// Add Callback for Custom TinyMCE editor stylesheets. (editor-style.css)
add_editor_style();

// This feature enables post and comment RSS feed links to head
add_theme_support('automatic-feed-links');

// This feature enables custom-menus support for a theme
register_nav_menus(array(
    'touch_menu' => __('Touch Menu', 'semper-fi-lite'),
    'content_menu' => __('Menu Bar Below Title', 'semper-fi-lite')));

// This enables featured image on posts and pages
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumbnail_size', 300, 300, true);
add_image_size( 'semperfi_featured_image', 1350, 576, false );
add_image_size( '1920_by_1080_image', 1920, 1080, false );

// Add Custom Sizes to options
add_filter( 'image_size_names_choose', 'semperfi_custom_sizes' );
function semperfi_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'semperfi_featured_image' => __( 'Semper Fi Lite Size', 'semper-fi-lite' ),
        '1920_by_1080_image' => __( 'Semper Fi Lite 1920 By 1080', 'semper-fi-lite' ),
    ));
}

// Jetpack Open Graph protocol isn't really that good, I'm better.
add_filter( 'jetpack_enable_open_graph', '__return_false' );

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us.
*/
add_theme_support( 'title-tag' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
    
} endif;


/**
 * Remove this crap code that adds margin-top in pixels to the HTML element, why would you do this... */
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}


/**
 * I don't need that emoji junk in my header */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Switch default core markup for search form, comment form, and comments to output valid HTML5.
add_theme_support( 'html5', array('automatic-feed-links', 'caption', 'comment-form', 'comment-list', 'custom-background', 'gallery', 'search-form', 'widgets'));

// Set max comments depth to 99 on the discussion settings page
add_filter( 'thread_comments_depth_max', function( $max ){ return 3;} );

function semperfi_custom_excerpt_length( $length ) {
   return 100;
}
add_filter( 'excerpt_length', 'semperfi_custom_excerpt_length', 999 );


// add more link to excerpt
function semperfi_custom_excerpt_more($more) {
   global $post;
   return '<a class="continue-reading" href="'. get_permalink($post->ID) . '">'. __('Continue Reading', 'semper-fi-lite') .'</a>';
}
add_filter('excerpt_more', 'semperfi_custom_excerpt_more');


// Doesn't look right to have the textbox on top
function semperfi_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'semperfi_move_comment_field_to_bottom' );


// Wrap Video in a DIV so that videos width and height become reponsive using CSS
add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 3);
function wrap_embed_with_div($html, $url, $attr) {
	if (preg_match("/youtu.be/", $html) || preg_match("/youtube.com/", $html) || preg_match("/vimeo/", $html) || preg_match("/wordpress.tv/", $html) || preg_match("/v.wordpress.com/", $html)) { 
        // Don't see your video host in here? Just add it in, make sure you have the forward slash marks
        $html = '<div class="video-container">' . $html . "</div>"; }
        return $html;}

// WordPress Widgets start right here.
add_action('widgets_init', 'semperfi_widgets_init');
function semperfi_widgets_init() {

	register_sidebar(array(
		'name'            => 'Footer Widgets',
		'id'              => 'footer_widget',
		'description'     => 'Widgets in this area will be shown below the the content of every page.',
		'before_widget'   => '<aside class="footer_widget">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h4>',
		'after_title'     => '</h4>', )); 

    register_sidebar( array(
		'name'            => 'Menu Widgets',
		'id'              => 'menu_widgets',
		'before_widget'   => '',
		'after_widget'    => '',
		'before_title'    => '<h3>',
		'after_title'     => '</h3>',));
    }

// Add quick filter so I don't need wrap needless css or html5 elements
add_filter('next_post_link', 'next_post_link_attributes');
function next_post_link_attributes($output) {
    $code = 'class="next_post_link"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);}

add_filter('previous_post_link', 'post_link_attributes');
function post_link_attributes($output) {
    $code = 'class="previous_post_link"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);}

add_filter('next_posts_link_attributes', 'previous_posts_link_attributes');
function next_posts_link_attributes() {return 'class="next_post_link"';}

add_filter('previous_posts_link_attributes', 'next_posts_link_attributes');
function previous_posts_link_attributes() {return 'class="previous_post_link"';}

// Make images float properly
function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// Checks if the Widgets are active
function semperfi_is_sidebar_active($index) {
	global $wp_registered_sidebars;
	$widgetcolums = wp_get_sidebars_widgets();
	if ($widgetcolums[$index]) {
		return true; }
		return false; }
	
// Load up links in admin bar so theme is edit
function semperfi_theme_options_add_page() {
    add_theme_page(__('Semper Fi Info', 'semper-fi-lite'), __('Semper Fi Info', 'semper-fi-lite'), 'edit_theme_options', 'theme_options', 'semperfi_theme_options_do_page');}

// Load up the Localizer so that the theme can be translated
load_theme_textdomain( 'semperfi_localizer', get_template_directory() . '/language' );



/**
 * Create Organization Microdata
 */
require get_parent_theme_file_path( '/inc/microdata-markup.php' );


/**
 * Customize the Woo-Commerce
 */
require get_parent_theme_file_path( '/inc/woo-commerce.php' );


/**
 * Generates the default options on install or activation for any blank values
 */
require get_parent_theme_file_path( '/inc/customizer-generate-default-options.php' );


/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );


/**
 * Customizer Custom CSS Generation
 */
require get_parent_theme_file_path( '/inc/customizer-css-generator.php' );


//	A safe way of adding scripts to WordPress
if (!function_exists('semperfi_scripts')) {
	function semperfi_scripts() {
        $my_theme = wp_get_theme();
        wp_enqueue_style('semperfi-google-font', 'https://fonts.googleapis.com/css?family=Raleway:400,400i,700|Vollkorn&amp;subset=latin-ext' );
        wp_enqueue_style('semperfi-fontastic', get_template_directory_uri() . '/fonts/schwarz.css');
    }
}

if (!is_admin()) add_action('wp_enqueue_scripts', 'semperfi_scripts', 21);

// Add in that jumping comment reply thingy
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );

// Add some CSS so I can Style the Theme Options Page
function semperfi_admin_enqueue_scripts( $hook_suffix ) {
	wp_enqueue_style('semperfi-theme-options', get_template_directory_uri() . '/theme-options.css', false, '1.0');}

add_action('admin_print_styles-appearance_page_theme_options', 'semperfi_admin_enqueue_scripts');

// Create the Theme Information page (Theme Options)
function semperfi_theme_options_do_page() { ?>

<div class="theme-wrap clear">
    
    <div class="theme-about hentry">
    
        <div>

            <h3 class="theme-name entry-title"><?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Name' ); ?></h3>

            <h4 class="theme-author">By 
                <a href="https://wordpress.org/themes/author/<?php echo $my_theme->get('Author'); ?>/" target="_blank">
                    <span class="author"><?php echo $my_theme->get('Author'); ?></span>
                </a>
            </h4>

        </div>

        <div class="theme-info">

            <div class="screenshot">

                <img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="">

            </div>
            
            <div class="upgrade-summary">
                
                <h4>Upgrade:</h4>
                
                <p>All of the theme's on <a href="https://wordpress.org/themes/" target="_blank">WordPress.org</a> are created, developed, and maintained free of charge by the author. The author of this theme, <i><?php echo $my_theme->get( 'Author' ); ?></i>, offers a premium version that includes additional features to enhance your experience. This premium version of <?php echo $my_theme->get( 'Name' ); ?> supports the author by offsetting the many hours of work being put into the theme. For incentive, the premium version of <?php echo $my_theme->get( 'Name' ); ?> includes additional features to customize the theme with. Many of these options, list of these options are just below, are not available in the free version. Additionally, the author has offered to make minor custom changes to the <?php echo $my_theme->get( 'Name' ); ?> code for further customization. However, the author is still going to support the free versions when issues of bugs or errors in the code are found.</p>
                
                <a href="<?php echo $my_theme->get('ThemeURI'); ?>" class="button button-secondary alignright"  style="margin-bottom:1em;" target="_blank">Upgrade</a>
                
            </div>
            
            <div class="upgrade-summary clear" style="display:none;">
                
                <h4>Premium Options:</h4>
                
                <table>
                    <tr>
                        <th>Upgraded Premium Features</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Double every numerical choice for every Customizer option.</td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td>Change <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Heading_Elements" target="_blank">Header</a> to any <a href="https://www.google.com/fonts" target="_blank">Google Font</a></td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td>Change <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p" target="_blank">Body</a> to any <a href="https://www.google.com/fonts" target="_blank">Google Font</a></td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td>Increase slider maxium count to 10</td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td>Replace the content background with uploaded image.</td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td>Control <?php echo $my_theme->get( 'Name' ); ?>'s main color through out the website.</td>
                        <td>&#10004;</td>
                    </tr>
                    <tr>
                        <td>Support with minor changes to <?php echo $my_theme->get( 'Name' ); ?>'s code.</td>
                        <td>&#10004;</td>
                    </tr>
                </table>
                
                <a href="<?php echo $my_theme->get('ThemeURI'); ?>" class="button button-secondary alignright"  style="margin-bottom:3.33em;" target="_blank">Upgrade</a>
                
            </div>
            
            <div class="theme-description entry-summary clear">
                
                <h4>Description:</h4>
                
                <p><?php echo $my_theme->get('Description'); ?></p>
            
            </div>
            
            <div class="theme-tags">
                
                <h4>Tags:</h4>
                
                <p>
                    <?php
                        
                        $tags_array = $my_theme->get('Tags');
                        
                        $result = count($tags_array) - 1;
                                           
                        $count = 0;
                        
                        foreach ($tags_array as $tag) {
                            
                            $count = $count + 1;
                            
                            if ($count <= $result)
                            
                                echo '<a href="https://wordpress.org/themes/tags/' . $tag . '" target="_blank">' . ucwords(str_replace("-", " ", $tag)) . '</a>, ';
                        
                            else
                            
                                echo '<a href="https://wordpress.org/themes/tags/' . $tag . '" target="_blank">' . ucwords(str_replace("-", " ", $tag)) . '</a>';} ?>
                    
                </p>
                    
            </div>

        </div>
        
        <div class="theme-head">
            
            <div class="theme-actions clear">
                
                
                <a href="http://schwarttzy.com/contact-me/" class="button button-secondary alignleft">Email</a>
				
                <a href="<?php echo $my_theme->get('ThemeURI'); ?>" class="button button-primary alignright" target="_blank">Upgrade</a>
				
            </div>

            <div class="theme-meta-info">
                
                <p>Version: <strong><?php echo $my_theme->get('Version');  ?></strong></p>
                
                <p>
                    
                    <strong>
					
				        <a href="<?php echo $my_theme->get('ThemeURI'); ?>" target="_blank">Theme Homepage &#8594;</a>
					
				    </strong>
                    
                </p>
            
            </div>
            
        </div>
            
            
				<div class="theme-meta">
                    
                    <div class="theme-rating">
                    
                        <h4>Rate the Theme</h4>
                        
                        <p>Help improve the WordPress community by rating <?php echo $my_theme->get('Name'); ?>. Rating a theme helps the community out by flitering the best WordPress Themes to the top. Visit <?php echo $my_theme->get('Name'); ?>'s Reviews page and take just a couple minutes to help improve the WordPress comunity for all of us.</p>
                        
                            <a href="https://wordpress.org/support/view/theme-reviews/<?php echo strtolower(str_replace(' ', '-', $my_theme->get('Name'))); ?>#postform" class="button button-secondary" target="_blank">Add Your Review</a>

                    </div><!-- .theme-rating -->

                    <div class="theme-support">
                        <h4>Support</h4>
                        <p>Contact the author, <i><?php echo $my_theme->get('Author');  ?></i>, by email for support with their theme, <i><?php echo $my_theme->get( 'Name' ); ?></i>, using this contact page.</p>
                        <a href="http://schwarttzy.com/contact-me/" class="button button-secondary" target="_blank">Email</a>
                        <p>Got something to say? Need help? View the offical support forum for <?php echo $my_theme->get( 'Name' ); ?> on WordPress.org</p>
                        <a href="https://wordpress.org/support/theme/<?php echo strtolower(str_replace(' ', '-', $my_theme->get('Name'))); ?>" class="button button-secondary" target="_blank">View support forum</a>
                    </div><!-- .theme-support -->

                    <div class="theme-translations">
                        <h4>Translations</h4>
                            <a href="https://translate.wordpress.org/projects/wp-themes/<?php echo strtolower(str_replace(' ', '-', $my_theme->get('Name'))); ?>" target="_blank">
                                Translate <?php echo $my_theme->get( 'Name' ); ?>
                            </a>
                    </div><!-- .theme-translations -->

                    <div class="theme-devs">
                        <h4>Development</h4>
                        <h5>Subscribe</h5>
                        <ul class="unmarked-list">
                            <li>
                                <a href="//themes.trac.wordpress.org/log/<?php echo strtolower(str_replace(' ', '-', $my_theme->get('Name'))); ?>?limit=100&amp;mode=stop_on_copy&amp;format=rss" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/feedicon.png">
                                    Development Log
                                </a>
                            </li>
                        </ul>

                        <h5>Browse the Code</h5>
                        <ul class="unmarked-list">
                            <li><a href="//themes.trac.wordpress.org/log/<?php echo strtolower(str_replace(' ', '-', $my_theme->get('Name'))); ?>/"  target="_blank">Development Log</a></li>
                            <li class="holy-cannoli"><a href="https://www.youtube.com/watch?v=WeTIa69NbVk" target="_blank">Aeronautical Jump</a><div class="chris-farley"></div></li>
                            <li><a href="//themes.svn.wordpress.org/<?php echo strtolower(str_replace(' ', '-', $my_theme->get('Name'))); ?>/"  target="_blank">Subversion Repository</a></li>
                            <li><a href="//themes.trac.wordpress.org/browser/<?php echo strtolower(str_replace(' ', '-', $my_theme->get('Name'))); ?>/" target="_blank">Browse in Trac</a></li>
                        </ul>
                    </div><!-- .theme-devs -->

        
        </div>
        
    </div>

</div>

<?php }
add_action('admin_menu', 'semperfi_theme_options_add_page'); ?>