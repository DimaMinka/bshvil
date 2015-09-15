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

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=516751091723291";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bshvil' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header__branding">

			<figure class="header__branding_logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php if(  get_header_image() ) : echo get_header_image(); else : echo get_template_directory_uri(); ?>/images/logo.png<?php endif; ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
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
				<li><a class="header__links_social header__links_social-mail" href="<?php if( get_theme_mod( 'cdk_header_2', true ) && filter_var( get_theme_mod( 'cdk_header_2', true ), FILTER_VALIDATE_EMAIL ) ) echo 'mailto:'.get_theme_mod( 'cdk_header_2', true ); ?>" target="_blank">Mail to</a></li>
				<li><a class="header__links_social header__links_social-in" href="<?php if( get_theme_mod( 'cdk_header_3', true ) ) echo get_theme_mod( 'cdk_header_3', true ); ?>" target="_blank">LinkedIn</a></li>
				<li><a class="header__links_social header__links_social-fb" href="<?php if( get_theme_mod( 'cdk_header_4', true ) ) echo get_theme_mod( 'cdk_header_4', true ); ?>" target="_blank">Facebook</a></li>
			</ul>
            <?php if( get_theme_mod( 'cdk_header_1', true ) ) :
                $customLink = get_theme_mod( 'cdk_header_1', true );
                $customID = url_to_postid( get_theme_mod( 'cdk_header_1', true ) );
            ?>

                <a href="<?php echo $customLink; ?>" class="header__links_lang"><?php echo get_the_title( $customID ); ?></a>

            <?php endif; ?>
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
