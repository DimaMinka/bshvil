<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bshvil
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bshvil' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header__branding">

			<figure class="header__branding_logo">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" alt="Logotype">
					<span>Site Logo</span>
				</a>
			</figure>

			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="header__branding_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="header__branding_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="header__branding_description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .header__branding -->

		<div class="header__links">
			<ul class="header__links_socials">
				<li><a class="header__links_social header__links_social-mail" href="#" target="_blank">Mail to</a></li>
				<li><a class="header__links_social header__links_social-in" href="#" target="_blank">LinkedIn</a></li>
				<li><a class="header__links_social header__links_social-fb" href="#" target="_blank">Facebook</a></li>
			</ul>
			<a href="#" class="header__links_lang">English</a>
		</div>

		<nav id="site-navigation" class="main-navigation header__nav" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="mobilenav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div>
	 	<a href="#" class="icon">
	    <div class="hamburger">
		    <div class="menui top-menu"></div>
		    <div class="menui mid-menu"></div>
		    <div class="menui bottom-menu"></div>
	    </div>
  	</a><!-- Hamburger -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
