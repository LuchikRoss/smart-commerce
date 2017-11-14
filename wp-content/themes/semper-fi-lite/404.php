<?php get_header(); ?>

    <article id="title-image-content">

        <header id="title-and-image">
            
            <video autoplay loop muted><source src="<?php echo get_template_directory_uri() . '/images/tommyboy.mp4'; ?>" type="video/mp4" /></video>
            
            <h2 itemprop="headline">404 Error - Page Not Found</h2>

        </header>

        <main id="the-article">

            <h3 class="post_title">Oh No, we can't find what your looking for!</h3>

            <p>The 404 or Not Found error message is a HTTP standard response code indicating that the client was able to communicate with the server, but the server could not find what was requested.</p>

            <p>The web site hosting server will typically generate a "404 Not Found" web page when a user attempts to follow a broken or dead link; hence the 404 error is one of the most recognizable errors users can find on the web.</p>

            <p>A 404 error should not be confused with "server not found" or similar errors, in which a connection to the destination server could not be made at all. A 404 error indicates that the requested resource may be available again in the future; however, the fact does not guarantee the same content.</p>

            <h4>So what can we do?</h4>

            <p>For starters, you could just head to the <a href="<?php echo home_url(); ?>/">home page</a>.</p>

        </main>
            
        <section id="categories-and-tags" style="background-image:url(<?php echo get_theme_mod('categories_and_tags_img'); ?>);">

            <h3>Next we have a list of all the pages that the website contains.</h3>
            
            <ul class="post-categories" >

                <?php wp_list_pages(array('title_li' => '', 'depth' => '1')); ?>

            </ul>

        </section>

        <main id="the-article">

            <h3 class="post_title">Finally, you might try search for it.</h3>
            
            <?php get_search_form(); ?>
            
        </main>

    </article>

<?php get_template_part( 'advertise' ); ?>

<?php get_footer(); ?>