<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Simple Catastic
 */

get_header(); ?>


			<section class="error-404 not-found">
		
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'simple-catastic' ); ?></h1>


				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'simple-catastic' ); ?></p>

					<?php get_search_form(); ?> <br />

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( simple_catastic_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'simple-catastic' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

	

<?php get_footer(); ?>