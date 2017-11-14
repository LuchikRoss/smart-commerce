<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?ver=<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Version' ); ?>" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <nav id="for-mobile" itemtype="https://schema.org/SiteNavigationElement">
        
        <img src="<?php echo get_theme_mod('nav_logo_img'); ?>" class="nav-logo" />
        
        <a class="enable-drop-down" href="#for-mobile">Open<br>Menu</a>
        
        <a class="disable-drop-down" href="#hide-moble">Close<br>Menu</a>
        
        <h1 id="hide-moble">
            
            <a rel="home" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        
        </h1>
        
<?php if (get_theme_mod('social_icon_display')) get_template_part( 'social-icons' ); ?>

        <?php if ( has_nav_menu( 'touch_menu' ) ) :  wp_nav_menu( array( 'theme_location' => 'touch_menu', 'depth' => 2, 'container' => '' ) ); else : ?><ul>
            <?php wp_list_pages(array('title_li' => '', 'depth' => '3')); ?>
        </ul><?php endif; ?>
        
        <?php if (!dynamic_sidebar('menu widgets')) : ?><?php endif; ?>

    </nav>
