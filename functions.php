<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );


//  Set the maximum allowed width for any content in the theme

if ( ! isset( $content_width ) ) $content_width = 1160;

// Add Rss feed support to Head section

add_theme_support( 'automatic-feed-links' );

// Add navwalker support to Head section

require ( 'walker/WordpressUikitMenuWalker.php' );

// Add post thumbnail/featured image support

add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'main'	=>	__( 'Main Menu', 'naked' ), // Register the Primary menu
                'mobile'	=>	__( 'Mobile Menu', 'naked' ), // Register the Mobile menu
                'footer'	=>	__( 'Footer Menu', 'naked' ) // Register the Footer menu
		
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Admin', // Description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> ''					// What to display in the case of no title defined for a widget
         ));
		register_sidebar(array(			
		'id' => 'first-footer-widget', 
		'name' => 'Footer One',				
		'description' => 'Admin', 
		'before_widget' => '<div>',	
		'after_widget' => '</div>',	
		'before_title' => '<h3 class="side-title">',	
		'after_title' => '</h3>',
		'empty_title'=> ''			
         ));
		register_sidebar(array(			
		'id' => 'second-footer-widget', 
		'name' => 'Footer Two',				
		'description' => 'Admin', 
		'before_widget' => '<div>',	
		'after_widget' => '</div>',	
		'before_title' => '<h3 class="side-title">',	
		'after_title' => '</h3>',
		'empty_title'=> ''			
         ));
		register_sidebar(array(			
		'id' => 'third-footer-widget', 
		'name' => 'Footer Three',				
		'description' => 'Admin', 
		'before_widget' => '<div>',	
		'after_widget' => '</div>',	
		'before_title' => '<h3 class="side-title">',	
		'after_title' => '</h3>',
		'empty_title'=> ''			
         ));
		register_sidebar(array(			
		'id' => 'fourth-footer-widget', 
		'name' => 'Footer Four',				
		'description' => 'Admin', 
		'before_widget' => '<div>',	
		'after_widget' => '</div>',	
		'before_title' => '<h3 class="side-title">',	
		'after_title' => '</h3>',
		'empty_title'=> ''			
         ));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add fitvid
	wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// add theme scripts
        wp_enqueue_script( 'naked-uikit', get_template_directory_uri() . '/js/uikit.js', array(), NAKED_VERSION, true );
	wp_enqueue_script( 'naked', get_template_directory_uri() . '/js/theme.js', array(), NAKED_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header
