<?php get_header(); ?>





<div class="content-area">
    	<div class="about-content-bg">
        	<div class="inner-about-white-bg">
           <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h6 class="page-title"><?php printf( __( 'Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h6>
                        </header>
            
                    <?php /*?><?php twentytwelve_content_nav( 'nav-above' ); ?> <?php */?>
            
                        <?php /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>
							<div class="entry">
								<h2><span><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></h2>
								
								<?php the_excerpt(); ?>
								<ul class="post-meta">
									<li class="post-meta-readmore"><a href="<?php echo get_permalink(); ?>">Read More</a></li>
								</ul>
							</div>
						<?php endwhile; ?>
            
                        <?php /*?><?php twentytwelve_content_nav( 'nav-below' ); ?><?php */?>
            
                    <?php else : ?>
            
                        <article id="post-0" class="post no-results not-found">
                            <header class="entry-header">
                                <h2 class="entry-title"><?php _e( 'Nothing Found'); ?></h2>
                            </header>
            
                            <div class="entry-content">
                                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.' ); ?></p>
                                <?php get_search_form(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-0 -->
            
                    <?php endif; ?>
            	
            </div>
        </div>
     </div>








<?php get_footer(); ?>

	