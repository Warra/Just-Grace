<?php 
/*
*	Template name: News
*
*
*/
get_header(); 

?>


            

<div class="content-area">
    	<div class="about-content-bg">
        	
            <div class="all-news-dec">
			  
              <?php query_posts( array( 'news' => 'news', 'posts_per_page' => -1 ) );  ?>
              
              <?php query_posts('category_name=news&showposts=-1');
					while (have_posts()) : the_post();
					  // do whatever you want
				?>
                <div class="inner-about-white-bg">
              <div class="news-right-img"><?php echo get_the_post_thumbnail($post->ID,"medium") ?>  </div>
            <div class="news-left-text">
            
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <p><?php echo implode(" ",array_slice(explode(" ", strip_tags(get_the_content())),0,40)); ?></p>
            <div class="read-more-btn-post"><a href="<?php the_permalink() ?>">READ FULL STORY</a></div>
            </div>
            <div class="clear"></div>
            </div>
				<?php endwhile;  ?>
 
            	</div>
            
        </div>
     </div>








<?php get_footer(); ?>