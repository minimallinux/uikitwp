<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link id="data-uikit-theme" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/uikit.css"/>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
$nav = wp_nav_menu(array(
    'theme_location' => 'main',
    'menu_class'     => 'uk-navbar-nav uk-hidden-small uk-navbar-flip',
    'depth'          => 2,
    'walker'         => new WordpressUikitMenuWalker('navbar'),
    'echo'           => false,
    'fallback_cb'    => false
));
?>
<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>
</head>
<body class="tm-background">
<nav class="tm-navbar uk-navbar uk-navbar-attached uk-navbar-transparent">
            <div class="uk-container uk-container-center">
	<a class="uk-navbar-brand uk-hidden-small" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img class="uk-margin uk-margin-remove" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" width="90" height="30" /></a>
            <?= $nav ?>
            <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
            <div class="uk-navbar-brand uk-navbar-center uk-visible-small">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" width="90" height="30" title="UIkit" alt="UIkit">
        </div>
    </nav>
    <div id="tm-offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <?=  wp_nav_menu(array(
           'theme_location' => 'mobile',
           'menu_class' => 'uk-nav uk-nav-offcanvas uk-nav-parent-icon',
           'depth'          => 2,
           'walker'         => new WordpressUikitMenuWalker('navbar'),
           'echo'           => false,
           'fallback_cb'    => false
            )); ?>
        </div>
    </div>
<main class="main-fluid">
<div class="tm-section">
<div class="uk-container">   
