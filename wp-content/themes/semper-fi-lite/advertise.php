<?php if (get_theme_mod('advertise_display')) : ?>
        <article id="advertises">
        
            <?php if ( (current_user_can('editor') || current_user_can('administrator')) && (!is_customize_preview()) ) : ?><a href="<?php echo get_admin_url(); ?>customize.php" title="Only the Admin and Editor can see this Link">Edit Advertise?</a><?php endif; ?>
            
<?php if (get_theme_mod('advertise_1_display')) : ?>
            <section>
                
                <img src="<?php echo get_theme_mod('advertise_1_img'); ?>" class="store-front-image"/>
            
                <h3><a href="<?php echo get_theme_mod('advertise_1_url'); ?>"><?php echo get_theme_mod('advertise_1'); ?></a></h3>
            
            </section>
            
<?php endif; ?>
            
<?php if (get_theme_mod('advertise_2_display')) : ?>
            <section>
                
                <img src="<?php echo get_theme_mod('advertise_2_img'); ?>" class="store-front-image"/>
            
                <h3><a href="<?php echo get_theme_mod('advertise_2_url'); ?>"><?php echo get_theme_mod('advertise_2'); ?></a></h3>
            
            </section>
            
<?php endif; ?>
            
<?php if (get_theme_mod('advertise_3_display')) : ?>
            <section>
                
                <img src="<?php echo get_theme_mod('advertise_3_img'); ?>" class="store-front-image"/>
            
                <h3><a href="<?php echo get_theme_mod('advertise_3_url'); ?>"><?php echo get_theme_mod('advertise_3'); ?></a></h3>
            
            </section>
            
<?php endif; ?>
            
<?php if (get_theme_mod('advertise_4_display')) : ?>
            <section>
                
                <img src="<?php echo get_theme_mod('advertise_4_img'); ?>" class="store-front-image"/>
            
                <h3><a href="<?php echo get_theme_mod('advertise_4_url'); ?>"><?php echo get_theme_mod('advertise_4'); ?></a></h3>
            
            </section>
            
<?php endif; ?>
            
        </article>
            
<?php endif; ?>