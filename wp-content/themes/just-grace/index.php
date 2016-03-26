<?php
/*
*   Template name: Home Page
*
*
*/
get_header();
?>
<div class="content-area">
    <div class="inner-content-bg about-content-bg">
        <div class="container">
                <div class="content-left-side">
                    <?php dynamic_sidebar('inner-content-left'); ?>
                </div>
                <div class="content-right-side">
                    <div  style="height:250px"class="right-green-1">

                    </div>
                    <div class="right-green-2">
                    <?php while ( have_posts() ) : the_post(); ?>
                       <?php the_content(); ?>
                         <?php /*?> <?php comments_template( '', true ); ?><?php */?>
                      <?php endwhile; // end of the loop. ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
     </div>
     <div class="footer-1">
            <div class="container">
                <div class="footer-1-left">
                <?php dynamic_sidebar('footer-top-1'); ?>

                </div>
            </div>
        </div>
        <?php get_footer(); ?>