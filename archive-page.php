<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="post-section-content archives-content" role="main">
		
		<h3>Archives by Month:</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h3>Archives by Subject:</h3>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

</div><!-- p-section-content -->


<?php get_footer(); ?>