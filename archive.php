<?php get_header(); ?>

         <section class="blog-section group"> 
       
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                 
                 <article <?php post_class(); ?>>
                  
                    <?php if ( has_post_format( 'aside' ) ) { ?>
                             <?php the_content() ?>
                            <div class="blog-post-info"><span class = "posttime"><?php the_time('F jS, Y') ?> </div></article> <hr />	
                          <?php } else if ( has_post_format( 'quote' ) ) {?>
                            <?php the_content() ?>
                             <div class="blog-post-info"><span class = "posttime"><?php the_time('F jS, Y') ?> </div> </article> <hr />						   
                            <?php } else { ?>
    
                    <h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a> </h3>
                        <div class="blog-post-info"><span class = "posttime"><time><?php the_time('F jS, Y') ?> </time></span> <span> <?php the_category(' / '); ?> 
                        </span> <span><?php the_tags() ?> </span> <!--<span>Written by: <?php the_author_posts_link()?></span>-->
                        </div>
                    
                        <?php the_content( '[Continue Reading...]' ) ?><hr />
                    
                 </article>	<?php } ?>
             <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
             <?php endif; ?>
       
       	 </section>  
         
          <div class="next-prev">
            <div>
                <?php next_posts_link('Older Posts »', 10); ?>
            </div>
 		</div>
         
         <div class="inner-footer group">
              
                    <?php ( ! dynamic_sidebar( 'left-footer-widget-1' ) ); ?>
					<?php ( ! dynamic_sidebar( 'center-footer-widget-2' ) ); ?>
					<?php ( ! dynamic_sidebar( 'right-footer-widget-3' ) ); ?>
         
        </div>       

<?php get_footer(); ?>