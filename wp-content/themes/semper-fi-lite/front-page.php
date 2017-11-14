<?php get_header(); ?>
<?php if(!is_paged() && is_front_page() && !is_home()) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="title-image-content" itemscope itemtype="http://schema.org/NewsArticle">

        <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php echo get_permalink(); ?>"/>

        <header id="title-and-image">
            
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

            <h2 itemprop="headline"><?php if ( get_the_title() ) : the_title();  else : _e('(No Title)', 'semper-fi-lite'); endif; ?></h2>

        </header>

        <main id="the-article" itemprop="articleBody">
            
            <?php edit_post_link('Edit this Post'); ?>
                
            <?php get_template_part( 'microdata' ); ?>
            
            <?php the_content(); ?>

            <?php wp_link_pages( array('before' => 'Pages: ', 'after' => '</br>') ); ?>

        </main>

    </article>

<?php endwhile; endif; ?>

<?php get_template_part( 'store-front' ); ?><?php else : get_template_part( 'the-slider' ); endif; ?>

<?php get_template_part( 'show-blog' ); ?>

<?php get_template_part( 'advertise' ); ?>

<?php get_footer(); ?>