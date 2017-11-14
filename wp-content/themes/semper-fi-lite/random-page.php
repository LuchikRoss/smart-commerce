<?php $converted = preg_replace("/[^A-Za-z0-9?!]/", '-', preg_replace("/[^A-Za-z0-9?!\s]/",'',get_theme_mod('backdrop_' . rand(1, 4))));

$args = array( 'pagename' => $converted );

$random_post = new WP_Query($args);

if($random_post->have_posts()) : 

    while($random_post->have_posts()) :

        $random_post->the_post(); ?>
        
    <article class="backdrop" <?php if ( has_post_thumbnail() ) : ?> style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?>);" <?php else : ?>style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/harvested-the-payoff_img.jpg);" <?php endif; ?>  itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting" >

        <?php if ( has_post_thumbnail() ) : ?><figure itemprop="image" itemscope itemtype="https://schema.org/ImageObject">

            <?php the_post_thumbnail('featured_image', array( 'class' => 'featured_image', 'itemprop' => 'url')); ?>


            <meta itemprop="url" content="<?php wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured_image' ); ?>">

            <meta itemprop="width" content="900">

            <meta itemprop="height" content="532">

        </figure><?php endif; ?>
        
        <div itemprop="articleBody">

            <h3 itemprop="name headline"><a href="<?php the_permalink() ?>"><?php if ( get_the_title() ) { the_title();} else { _e('(No Title)', 'semper-fi-lite'); } ?></a></h3>
            
            <?php the_content() ?>
                
            <time datetime="<?php the_time('Y-m-d H:i') ?>" itemprop="datePublished">July 16th, 1987</time>

            <?php edit_post_link('Edit this Post'); ?>


        </div>
    
    </article>

<?php endwhile; else: ?>
        
    <article class="backdrop" style="background-image: url(images/harvested-the-payoff_img.jpg);">
        
        <div>

            <h3>Oops, there are no posts.</h3>
            
            <p>No posts were found, head to the <a href="<?php if ( current_user_can('editor') || current_user_can('administrator') ) { echo get_admin_url(); } ?>customize.php">Theme Customizer</a> for <a href="<?php $my_theme = wp_get_theme(); echo $my_theme->get( 'ThemeURI' );?>">Semper Fi Lite</a> and choose some pages to randomly display. Just copy the title of the page or post exactly and paste it into the boxes labeled "Title of Random Page Choice" under the section labeled "Random Page Display."</p>
            
        </div>
    
    </article>

<?php endif; ?>