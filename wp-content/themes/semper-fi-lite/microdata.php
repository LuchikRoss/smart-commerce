<?php if ( function_exists( 'is_cart' ) ) :

if (!is_cart()) : ?>

                <aside id="article-microdata">

                    <?php echo get_avatar( get_the_author_meta( 'ID') , 600); ?>
                    
                    <p>
                        <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                           
                            <span itemprop="name"><?php the_author(); ?></span>
                        
                        </strong>
                        
                        published <?php if ( get_the_title() ) { the_title();} else { _e('(No Title)', 'semper-fi-lite'); } ?> on <time itemprop="datePublished" content="<?php the_time('Y-m-d H:i') ?>" ><?php the_time('F j, Y'); ?></time> and was last modified on <time itemprop="dateModified" content="<?php the_modified_date('Y-m-d H:i'); ?>"><?php the_modified_date('F j, Y'); ?></time>.</p>

                    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        
                        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                            
                            <img src="<?php echo get_theme_mod('publisher_logo_img'); ?>" class="microdata-publisher-logo"/>
                            
                            <meta itemprop="url" content="<?php echo get_theme_mod('publisher_logo_img'); ?>">
                            
                            <meta itemprop="width" content="600">
                            
                            <meta itemprop="height" content="60">
                        
                        </div>
                        
                        <meta itemprop="name" content="<?php bloginfo('name'); ?>">
                    
                    </div>
                
                </aside>

<?php endif; else : ?>

                <aside id="article-microdata">

                    <?php echo get_avatar( get_the_author_meta( 'ID') , 600); ?>
                    
                    <p>
                        <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                           
                            <span itemprop="name"><?php the_author(); ?></span>
                        
                        </strong>
                        
                        published "<?php if ( get_the_title() ) { the_title();} else { _e('(No Title)', 'semper-fi-lite'); } ?>" on 
                        
                        <time itemprop="datePublished" content="<?php the_time('Y-m-d H:i') ?>" >
                            
                            <?php the_time('F j, Y'); ?>
                        
                        </time>
                        
                        and was last modified on 
                        
                        <time itemprop="dateModified" content="<?php the_modified_date('Y-m-d H:i'); ?>">
                            
                            <?php the_modified_date('F j, Y'); ?>
                        </time>
                        
                    .</p>

                    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        
                        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                            
                            <img src="<?php echo get_theme_mod('publisher_logo_img'); ?>" class="microdata-publisher-logo"/>
                            
                            <meta itemprop="url" content="<?php echo get_theme_mod('publisher_logo_img'); ?>">
                            
                            <meta itemprop="width" content="600">
                            
                            <meta itemprop="height" content="60">
                        
                        </div>
                        
                        <meta itemprop="name" content="<?php bloginfo('name'); ?>">
                    
                    </div>
                
                </aside>

<?php endif; ?>