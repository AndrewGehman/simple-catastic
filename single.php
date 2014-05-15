<?php get_header(); ?>

         <section class="post-section blog-section group"> 
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                 
                 <article <?php post_class(); ?>> 
                    <h3><?php the_title(); ?></h3>
                        <div class="blog-post-info"><span><time class = "posttime"><?php the_time('F jS, Y') ?> </time></span> <span> <?php the_category(' / '); ?> </span>
                        <span><?php the_tags() ?> </span> <!--<span>Written by: <?php the_author_posts_link()?></span>-->
                        </div>
                        <?php the_content() ?>
                 </article>	
             <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
             <?php endif; ?>
       
       	 </section>  
         
         <?php comments_template(); ?>
         
         	<hr />
         
		 <div class="next-prev">
            <div class="navi left"> 
                <?php previous_post_link(); ?> 
            </div> 
            
            <div class="navi right">
                <?php next_post_link(); ?>
            </div>
 		</div>
<?php get_footer(); ?>