<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brasier
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/images/fb_image.jpg" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_deregister_script('jquery') ?>
	<?php wp_head(); ?>
</head>
<body id="top" data-spy="scroll" data-target="#header" data-offset="70"  <?php body_class(); ?>>

	<nav id="header" class="navbar navbar-expand-lg fixed-top">
		<a href="#top" class="navbar-brand mr-auto d-lg-none page-scroll"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="Brasier" /></a>
		<button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#brasier-nav" aria-controls="brasier-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-md-center" id="brasier-nav">
			<ul class="navbar-nav text-right ml-auto mr-3">
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#about">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#events">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#menu">Menu</a>
				</li>
			</ul>
			<a href="#top" class="navbar-brand m-0 d-none d-lg-block page-scroll"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="Brasier" /></a>
			<ul class="navbar-nav text-left mr-auto ml-3">
				<li class="nav-item">
					<a href="#gallery" class="nav-link page-scroll">Gallery</a>
				</li>
				<li class="nav-item">
					<a href="#rsvp" class="nav-link page-scroll">RSVP</a>
				</li>
				<li class="nav-item">
					<a href="#contact" class="nav-link page-scroll">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<header id="masthead" class="site-header d-none">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bocaditos' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
