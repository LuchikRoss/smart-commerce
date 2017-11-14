<?php
/**
 * Semper Fi Lite: Microdata Markup
 *
 * @package WordPress
 * @subpackage Semper_Fi
 * @since 24
 */


function semperfi_microdata_organization(){ 
if( get_theme_mod('microdata_organization_display' == 'true') ) { ?>
<script type="application/ld+json">
    { "@context" : "http://schema.org",
      "@type" : "Organization",
      "legalName" : "<?php echo get_theme_mod('microdata_legalname'); ?>",
      "url" : "<?php echo home_url(); ?>",
      "contactPoint" : [{
        "@type" : "ContactPoint",
        "telephone" : "<?php echo get_theme_mod('microdata_phone_number'); ?>",
        "contactType" : "customer service"
    }]
      "logo" : "<?php echo get_theme_mod('publisher_logo_img'); ?>",
      "sameAs" : [<?php if ( get_theme_mod('microdata_facebook_url') != '#') : ?> 
        "<?php echo get_theme_mod('microdata_facebook_url'); ?>",<?php endif; ?>
<?php if ( get_theme_mod('microdata_twitter_url') != '#') : ?> 
        "<?php echo get_theme_mod('microdata_twitter_url'); ?>",<?php endif; ?>
<?php if ( get_theme_mod('microdata_googleplus_url') != '#') : ?> 
        "<?php echo get_theme_mod('microdata_googleplus_url'); ?>",<?php endif; ?>
<?php if ( get_theme_mod('microdata_youtube_url') != '#') : ?> 
        "<?php echo get_theme_mod('microdata_youtube_url'); ?>"<?php endif; ?>]
    }
</script>
<?php
    }
}
add_action( 'wp_print_scripts','semperfi_microdata_organization' );