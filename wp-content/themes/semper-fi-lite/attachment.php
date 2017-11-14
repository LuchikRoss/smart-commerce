<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="title-image-content">
            
            <header id="title-and-image">
            
                <img src="<?php echo wp_get_attachment_image_url( get_the_ID(), 'full' ); ?>" class="featured_image" />
                
                <h2><?php if ( get_the_title() ) { the_title();} else { _e('(No Title)', 'semper-fi-lite'); } ?></h2>
            
            </header>
            
            <main id="the-article">
                
                <p style="text-align: center;"><img src="<?php echo wp_get_attachment_image_url( get_the_ID(), 'full' ); ?>" class="featured_image" /></p>
            
                <p style="text-align: center;"><?php $images = array();
                $image_sizes = get_intermediate_image_sizes();
                array_unshift( $image_sizes, 'full' );
                foreach( $image_sizes as $image_size ) {
                    if (($image_size == 'full') || ($image_size == 'medium') || ($image_size == 'small') || ($image_size == 'thumbnail')) {
                    $image = wp_get_attachment_image_src( get_the_ID(), $image_size );
                    $name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
                    $images[] = '<a href="' . $image[0] . '">' . ucfirst(strtolower($name)) . '</a>';}}

                echo implode( ' | ', $images ); ?></p>
            
            </main>

        </article>
        
<?php endwhile; endif; ?>

<?php get_template_part( 'store-front' ); ?>

<?php get_template_part( 'show-blog' ); ?>

<?php get_template_part( 'advertise' ); ?>

<?php get_footer(); ?>