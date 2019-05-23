<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>


		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Norton safe website snippet -->
		<meta name="norton-safeweb-site-verification" content="0fhcv46ujqxbejfndgakp-udywcfs0eb4tlkubrw29n97h8sq6zl3y9wio-6jg9mk8j1bxj9rjqg5wvub24-l4nwesyinwu7lky6mp6q3k1fz1spmuf5qefch9khaghm" />

		<!-- bing verification -->
		<meta name="msvalidate.01" content="E444CB44255B303585C4D31E05CBB83A" />

		<meta name="theme-color" content="#ffffff">
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> -->
		<style media="screen">
		/* latin-ext */
			@font-face {
			font-family: 'Libre Baskerville';
			font-style: normal;
			font-weight: 400;
			font-display: auto;
			src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(https://fonts.gstatic.com/s/librebaskerville/v6/kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNXaxMaC82U-ro.woff2) format('woff2');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			}
			/* latin */
			@font-face {
			font-family: 'Libre Baskerville';
			font-style: normal;
			font-weight: 400;
			font-display: auto;
			src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(https://fonts.gstatic.com/s/librebaskerville/v6/kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNZaxMaC82U.woff2) format('woff2');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			}
		</style>
		<!-- <link rel="stylesheet" href="https://use.typekit.net/lwk4pak.css"> -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140512054-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-140512054-2');
		</script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

	<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
		<?php get_template_part('template-parts/mobile-off-canvas'); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">

		<!-- TOP TOP BANNER -->
		<div class="top-banner">
			<div class="grid-x banner-container text-center">
				<div class="cell medium-12 scene_element scene_element--fadein">
					<span><p>Register as a prospective investor to get access to investment opportunities.</p></span>
					<a href="/register/" type="button" class="hollow button">Register</a>
				</div>
			</div>
		</div>

		<!-- MOBILE NAV -->
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e('Main Menu', 'foundationpress'); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title scene_element scene_element--fadein">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php if (function_exists('the_custom_logo')) : ?>
						   <?php the_custom_logo(); ?>
					   	<?php else :  ?>
							<?php bloginfo('name'); ?>
						<?php endif; ?>
					</a>
				</span>
			</div>
		</div>

		<!-- DESKTOP TOP BAR -->
		<nav class="site-navigation top-bar" role="navigation" >
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title scene_element scene_element--fadein">
					<?php if (function_exists('the_custom_logo')) : ?>
					   <?php the_custom_logo(); ?>
				   	<?php else :  ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="top-bar-right scene_element scene_element--fadein">
				<?php foundationpress_top_bar_r(); ?>

				<?php if (! get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
					<?php get_template_part('template-parts/mobile-top-bar'); ?>
				<?php endif; ?>
			</div>

		</nav>

	</header>
