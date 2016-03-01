<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topical_Roots
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'topicalroots' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


	<?php if ( get_header_image() && ('blank' == get_header_textcolor()) ) : ?>
         <div class="header-image">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            	<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
            </a>
        </div>
    <?php endif; // End header image check. ?>
            
	<?php 
        if ( get_header_image() && !('blank' == get_header_textcolor()) ) { 
            echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">'; 
        } else {
            echo '<div class="site-branding">';
        }
    ?>
    
	    <div class="title-box">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/images/tr-logo.png' ?>"></a></h1>
			<h2 class="site-description">Organic Topical Oils</h2>
	    </div>

		<div class="search-toggle">
		    <i class="fa fa-search"></i>
		    <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'topicalroots' ); ?></a>
	    </div>
	    
	    
	</div><!-- .site-branding -->
	<div id="search-container" class="search-box-wrapper clear">
	        <div class="search-box clear">
	            <?php get_search_form(); ?>
	        </div>
	    </div> 

	
<nav class="navbar navbar-inverse" role="navigation">
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand"><a href="http://topical/"><img src="<?php echo get_template_directory_uri() . '/images/sm-logo.png' ?>"></a></div>
    </div> <!-- navbar-header -->
    <div class="collapse navbar-collapse" id="collapse">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if (!is_front_page() && !is_page('patient-survey') && !is_page('the-topical-roots-story')) {?> class="active" <?php } ?>><a href="blog">Blog</a></li>
        <li><a href="<?php if (!is_front_page()) {?>http://topical/<?php } ?>#ingredients">Ingredients</a></li>
        <li><a href="<?php if (!is_front_page()) {?>http://topical/<?php } ?>#pricing">Pricing</a></li>
        <li><a href="<?php if (!is_front_page()) {?>http://topical/<?php } ?>#uses">Uses</a></li>
        <li><a href="<?php if (!is_front_page()) {?>http://topical/<?php } ?>#story">Our Story</a></li>
        <li><a href="<?php if (!is_front_page()) {?>http://topical/<?php } ?>#faq">FAQ</a></li>
        <li<?php if (is_page('patient-survey')) {?> class="active" <?php } ?>><a href="http://topical/patient-survey" target="_blank">Survey</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!-- collapse -->
</nav><!-- navigation -->
				
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
