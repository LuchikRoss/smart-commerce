<?php get_header();

if(!is_paged()) : while ( have_posts() ) : the_post(); ?>

        <article id="title-image-content" itemscope itemtype="http://schema.org/NewsArticle">
            
            <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php the_permalink() ?>"/>
            
            <header id="title-and-image">
            
            <?php if (is_customize_preview()) echo '<div class="customizer-tite-image"></div>'; ?>

<?php if ( has_post_thumbnail() ) : ?>
                <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

                    <?php the_post_thumbnail('featured_image', array( 'class' => 'featured_image', 'itemprop' => 'url')); ?>


                    <meta itemprop="url" content="<?php wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_image' ); ?>">

                    <meta itemprop="width" content="900">

                    <meta itemprop="height" content="532">
                    
                </div>
<?php else :?>
            <img src="<?php echo get_theme_mod('default_header_img'); ?>" class="featured_image" />

<?php endif; ?>
                <h2 itemprop="headline"><?php if ( get_the_title() ) { the_title();} else { _e('(No Title)', 'semper-fi-lite'); } ?></h2>
            
            </header>
            
            <main id="the-article" itemprop="articleBody"<?php if ( (get_theme_mod('main_background_img') != '') && (get_theme_mod('main_background_img') != get_template_directory_uri() . '/images/moose-aaaaaa.jpg') ) : ?> style="background-image:url(<?php echo get_theme_mod('main_background_img'); ?>);" <?php endif; ?>>
            
                <?php if ( function_exists( 'is_cart' ) ) : if ( !is_cart() && !is_checkout() && !is_account_page() ) : edit_post_link('Edit this Post'); endif; endif; ?>
                
                <?php if ( function_exists( 'is_cart' ) ) : if ( !is_cart() && !is_checkout() && !is_account_page() ) : ?><?php get_template_part( 'microdata' ); ?><?php endif; endif; ?>
                
                <?php the_content(); ?>

                <?php wp_link_pages( array('before' => 'Pages: ', 'after' => '</br>') ); ?>
            
            </main>
            
            <?php if ( function_exists( 'is_cart' ) ) : if(!is_cart() && !is_account_page() && comments_open()) : ?><section id="categories-and-tags" style="background-image:url(<?php echo get_theme_mod('categories_and_tags_img'); ?>);">
<?php if (get_the_category_list() != '') : ?>
    
                <ul class="post-categories" itemprop="about">

                    <li><?php echo get_the_category_list( __( '</li>

                    <li>', 'semper-fi-lite' ) ); ?></li>

                </ul>
    <?php endif; elseif (comments_open()) : ?><section id="categories-and-tags" style="background-image:url(<?php echo get_theme_mod('categories_and_tags_img'); ?>);">
<?php if (get_the_category_list() != '') : ?>
    
                <ul class="post-categories" itemprop="about">

                    <li><?php echo get_the_category_list( __( '</li>

                    <li>', 'semper-fi-lite' ) ); ?></li>

                </ul><?php endif; endif; ?>

                <?php if(get_the_tag_list()) { echo get_the_tag_list('<ul class="tag-list" itemprop="keywords">

                    <li>',' </li>

                    <li>','</li>

                </ul>');} ?>


            </section><?php endif; ?>
<?php if (!is_home() && (get_theme_mod('comments_setting') != 'none') && (get_theme_mod('comments_setting') != 'page')) : comments_template(); endif; ?>

        </article>

<?php endwhile; endif; ?>

<?php if ( function_exists( 'is_checkout' ) ) : if (!is_checkout()) : get_template_part( 'store-front' ); endif; else : get_template_part( 'store-front' ); endif; ?>

<?php get_template_part( 'advertise' ); ?>

<?php get_footer(); ?>