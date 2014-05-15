<?php get_header(); ?>
 <section class="post-section-content group"> 
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                 
                 <article <?php post_class(); ?>> 
                    <h3><?php the_title(); ?></h3>
                        <?php the_content() ?>
                 </article>	
             <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
             <?php endif; ?>
       
 </section>  
<?php get_footer(); ?>