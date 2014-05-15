<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until <div class="content">
 *
 * @package Simple Catastic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"> 
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- optimize for mobile -->
<title><?php wp_title( ' &raquo; ', true, 'right' ); ?></title>  
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<?php wp_head(); ?>            
</head>

<body <?php body_class(); ?>>

      <header class="header group"> 
        	   <div id="sub-header" class="group"> 
                   <div id="site-navigation" class="main-navigation" role="navigation">
						<h1 class="menu-toggle"><?php _e( '&#x2261; Menu', 'simple-catastic' ); ?></h1>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'simple-catastic' ); ?></a>
						<?php wp_nav_menu( array( 'menu' => 'main', 
                                                'container' => 'nav', 
                                                'container_id'    => 'mainmenu'
												 ) ); ?>   
					</div><!-- #site-navigation -->   
        		</div>                
                
      </header>

		<div class="main">

            <div class="content">