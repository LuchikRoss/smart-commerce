
        
        

        <footer id="widgets-and-credits">
        
            <?php if ( (current_user_can('editor') || current_user_can('administrator')) && (!is_customize_preview()) ) : ?><a href="<?php echo get_admin_url(); ?>widgets.php" title="Only the Admin and Editor can see this Link">Edit Widgets?</a><?php endif; ?>
            
<?php get_sidebar(); ?>    
            
            <section id="credit-to-schwarttzy">
                
                <p>Good Old Fashioned Hand Written <a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' );?>" title="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Name' );?> - v<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'Version' );?>">WordPress Theme</a> by <a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'AuthorURI' );?>" title="Eric J Schwarz"><?php echo $my_theme->get( 'Author' );?></a></p>
                
            </section>
        
        </footer>

<!-- Start of WordPress Footer  -->
<?php wp_footer(); ?>
<!-- End of WordPress Footer -->
        
	</body>
</html>