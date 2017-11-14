<?php get_header();

if (!is_shop()) : ?>

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
            
            <main id="the-article" itemprop="articleBody">

                <?php $product = wc_get_product( $wp_query->post ); ?>

                <?php woocommerce_content(); ?>

                <h2>Price: $<?php echo $product->get_regular_price(); ?> <?php if (($product->get_manage_stock() != 0) && ($product->get_stock_status() == 'instock')) : ?><span><?php echo $product->get_stock_quantity(); ?> in Stock</span><?php endif; ?></h2>

                <?php echo apply_filters('the_content', $product->get_description()); ?>
            
            </main>
            
            <section id="categories-and-tags" style="background-image:url(<?php echo get_theme_mod('categories_and_tags_img'); ?>);">
<?php if (get_the_category_list() != '') : ?>
    
                <ul class="post-categories" itemprop="about">

                    <li><?php echo get_the_category_list( __( '</li>

                    <li>', 'semper-fi-lite' ) ); ?></li>

                </ul>
    <?php endif; ?>

                <?php if(get_the_tag_list()) { echo get_the_tag_list('<ul class="tag-list" itemprop="keywords">

                    <li>',' </li>

                    <li>','</li>

                </ul>');} ?>


            </section>

        </article>

<?php get_template_part( 'advertise' ); ?>

<?php else : ?>

    <article id="title-image-content">
            
            <header id="title-and-image">
            
            <?php if (is_customize_preview()) echo '<div class="customizer-tite-image"></div>'; ?>
                
                <img src="<?php echo get_theme_mod('default_header_img'); ?>" class="featured_image" />
                
                <h2 itemprop="headline">The Store Front</h2>
            
            </header>
        
    </article>

    <?php $product_posts = new WP_Query( array( 'post_type' => array('product'), 'posts_per_page' => 100 ) ); ?>
        
    <?php if ( $product_posts->have_posts() ) : ?>

    <article id="advertises">
        
        <?php while ( $product_posts->have_posts() ) : $product_posts->the_post(); ?>
            
            <?php wc_get_template_part( 'content', 'product' ); ?>
        
        <?php endwhile; // end of the loop. ?>
        
        <?php do_action( 'woocommerce_after_shop_loop' ); ?>
            
    </article>

    <section id="categories-and-tags" style="background: url(<?php echo get_theme_mod('categories_and_tags_img'); ?>);">

    </section>
        
    <?php endif; wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>