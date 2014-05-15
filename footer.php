<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Simple Catastic
 */
?>

	</div><!--end content -->

	<footer role="contentinfo">
    
    		<hr>
        
            <p class="copyright"> &copy; Andrew Gehman <?php echo date( 'Y' ); ?></p>
                  
            <div class="social"> <a href="http://plus.google.com/+AndrewGehman"><img src="http://www.andrewgehman.com/wp-content/themes/AMGPortfolio/images/Google_Plus2.png" alt="Google Plus" /></a> 
                 				<a href="http://twitter.com/AndrewGehman"><img src="http://www.andrewgehman.com/wp-content/themes/AMGPortfolio/images/Twitter-icon.png" alt="Twitter" /></a>
                 				<a href="http://www.youtube.com/channel/UC-lLLwsHB5kX7hn-G1yktFw"><img src="http://www.andrewgehman.com/wp-content/themes/AMGPortfolio/images/YouTube-icon.png" alt="YouTube" /></a> 
        	</div> 
        
			<p class="themeinfo"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'simple-catastic' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'simple-catastic' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'simple-catastic' ), 'Simple Catastic', '<a href="http://www.andrewgehman.com" rel="designer">Andrew Gehman</a>' ); ?></p>
			 <p id="back-to-top"><a href="#">&#8593; Back to Top</a></p> 
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
