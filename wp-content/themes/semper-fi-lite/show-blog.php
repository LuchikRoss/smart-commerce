<?php

$remove_from_blog = get_the_ID();

global $paged;
global $wp_query;

if ( get_query_var('paged') ) :

    $paged = get_query_var('paged');

elseif ( get_query_var('page') ) :
    
    // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');

else :

    $paged = 1;

endif;

$wp_query = new WP_Query( array(
    'order' => 'DESC',
    'orderby' => 'date',
    'post_status' => 'publish',
    'post_type' => 'post',
    'posts_per_page' => get_option('posts_per_page'),
    'post__not_in' => array($remove_from_blog),
    'paged' => $paged));

if ( $wp_query->have_posts() ) : ?>

        <section id="the-posts">

<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php if (!has_post_thumbnail()) : post_class(array('the-blog','no-post-thumbnail')); else : post_class(array('the-blog'));  endif; ?> itemscope itemtype="http://schema.org/BlogPosting">

                <?php edit_post_link('Edit this Post'); ?>
                
                <meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                
<?php if ( has_post_thumbnail() ) : ?>
                <header class="post-image">

                    <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large_featured_image', array('itemprop' => 'image')); ?></a>

                        <meta itemprop="url" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">

                        <meta itemprop="width" content="1350">

                        <meta itemprop="height" content="576">

                    </div>

                </header>

<?php endif; ?>
                
                <div class="post-content" itemprop="articleBody">

                    <h4 itemprop="headline">
                        
                        <a href="<?php the_permalink() ?>" itemprop="mainEntityOfPage"><?php if ( get_the_title() ) { the_title();} else { _e('(No Title)', 'semper-fi-lite'); } ?></a>
                    
                    </h4>

                    <?php the_excerpt(); ?>
                    
                    <time itemprop="datePublished" content="<?php the_time('Y-m-d H:i') ?>" ><?php the_time('F jS, Y'); ?></time>
                
                </div>
                
                <meta itemprop="dateModified" content="<?php the_modified_date('Y-m-d H:i'); ?>">
                
                <meta itemprop="author" content="<?php the_author(); ?>">

                <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">

                        <img src="<?php echo get_theme_mod('publisher_logo_img'); ?>" class="microdata-publisher-logo"/>

                        <meta itemprop="url" content="<?php echo get_theme_mod('publisher_logo_img'); ?>">

                        <meta itemprop="width" content="600">

                        <meta itemprop="height" content="60">

                    </div>

                    <meta itemprop="name" content="<?php bloginfo('name'); ?>">

                </div>
                
            </article>

<?php endwhile; ?>
        </section>

        <section id="categories-and-tags" style="background: url(<?php echo get_theme_mod('categories_and_tags_img'); ?>);">
            
            <?php if (is_customize_preview()) echo '<div class="customizer-categories-and-tags"></div>'; ?>

<?php if ($wp_query->max_num_pages > 1) : // check if the max number of pages is greater than 1  ?>
            
            <?php if ( get_next_posts_link( 'Older News', $wp_query->max_num_pages )) : ?><h3 class="older-blog-posts"><?php next_posts_link( 'Older News', $wp_query->max_num_pages ); // display older posts link ?></h3><?php endif; ?>
            
            <?php if ( get_previous_posts_link( 'Newer News' )) : ?><h3 class="newer-blog-posts"><?php previous_posts_link( 'Newer News' ); // display newer posts link ?></h3><?php endif; ?>
<?php endif; ?>

        </section>

<?php wp_reset_postdata(); endif; ?>