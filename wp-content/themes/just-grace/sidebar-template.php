<?php 
/*
*	Template name: Left Side Bar
*
*
*/
get_header(); 

?>



<div class="content-area">
    	<div class="update-initiatives-bg about-content-bg">
        	<div class="container">
                <div class="update-left-part">
                    <div class="inner-left-white">
                        <?php dynamic_sidebar('initiatives-sidebar'); ?>
                    </div>
                </div>
                <div class="update-right-part">
                <?php while ( have_posts() ) : the_post(); ?>
					   <?php the_content(); ?>
                         <?php /*?> <?php comments_template( '', true ); ?><?php */?>
                      <?php endwhile; // end of the loop. ?>
                	
                </div>
            </div>
        </div>
     </div>   
        <?php get_footer(); ?> 