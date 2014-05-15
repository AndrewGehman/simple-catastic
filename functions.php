<?php
/**
 * Simple Catastic functions and definitions
 *
 * @package Simple Catastic
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'simple_catastic_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function simple_catastic_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Simple Catastic, use a find and replace
	 * to change 'simple-catastic' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'simple-catastic', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'simple-catastic' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'simple_catastic_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // simple_catastic_setup
add_action( 'after_setup_theme', 'simple_catastic_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function simple_catastic_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Intro Widget', 'simple-catastic' ),
		'id'            => 'intro-widget-1',
		'description'   => 'Intro Widget Area',
		'before_widget' => '<section id="%1$s" class="intro-text widget %2$s">',
		'after_widget'  => '</section><hr />',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
		register_sidebar( array(
		'name'          => __( 'Secondary Intro Widget', 'simple-catastic' ),
		'id'            => 'secondary-widget-2',
		'description'   => 'Secondary Intro Widget Area',
		'before_widget' => '<section id="%1$s" class="secondary-intro group widget %2$s">',
		'after_widget'  => '</section><hr />',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
		register_sidebar( array(
		'name'          => __( 'Left Footer Widget', 'simple-catastic' ),
		'id'            => 'left-footer-widget-1',
		'description'   => 'Left Footer Widget Area',
		'before_widget' => '<aside id="%1$s" class="grid_4 widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
		register_sidebar( array(
		'name'          => __( 'Center Footer Widget', 'simple-catastic' ),
		'id'            => 'center-footer-widget-2',
		'description'   => 'Center Footer Widget',
		'before_widget' => '<aside id="%1$s" class="grid_4 widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
		register_sidebar( array(
		'name'          => __( 'Right Footer Widget', 'simple-catastic' ),
		'id'            => 'right-footer-widget-3',
		'description'   => 'Right Footer Widget',
		'before_widget' => '<aside id="%1$s" class="grid_4 omega widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
}
add_action( 'widgets_init', 'simple_catastic_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function simple_catastic_scripts() {
	wp_enqueue_style( 'simple-catastic-style', get_stylesheet_uri() );

	wp_enqueue_script( 'simple-catastic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'simple-catastic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'simple-catastic-image-hover-swap', get_template_directory_uri() . '/js/image-hover-swap.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'simple_catastic_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Have the 'read more' link jump to the top of the page. 
* This is done as an easier way to deal with positioning issues
* that come from the fixed top menu. 
**/

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


 function load_fonts() {
            wp_register_style('googleFont-1', 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
            wp_enqueue_style( 'googleFont-1');
        }
    
    add_action('wp_print_styles', 'load_fonts');
