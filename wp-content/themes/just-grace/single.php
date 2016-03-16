<?php get_header(); ?>





<div class="content-area">
    	<div class="about-content-bg">
        	<div class="inner-about-white-bg">
            <h2><?php the_title(); ?></h2>
            <?php while ( have_posts() ) : the_post(); ?>
		   <?php the_content(); ?>
		 <?php /*?> <?php comments_template( '', true ); ?><?php */?>
		  <?php endwhile; // end of the loop. ?>
            	
            </div>
        </div>
     </div>








<?php get_footer(); ?>