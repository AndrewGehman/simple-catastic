<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>


 <section class="post-section-content group"> 
       <h3>Search Results</h3>
       <?php get_search_form(); ?>
 </section>  
<?php get_footer(); ?>