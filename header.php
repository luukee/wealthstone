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
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
		<link rel="stylesheet" href="https://use.typekit.net/lwk4pak.css">
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
				<div class="cell medium-12">
					<span><p>Register as a prospective investor to get access to investment opportunities.</p></span>
					<a href="http://localhost/wealthstone/wealthstone/login/" type="button" class="hollow button expanded">Register</a>
				</div>
			</div>
		</div>

		<!-- MOBILE NAV -->
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e('Main Menu', 'foundationpress'); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
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
		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<?php if (function_exists('the_custom_logo')) : ?>
					   <?php the_custom_logo(); ?>
				   	<?php else :  ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" data-smooth-scroll><?php bloginfo('name'); ?></a>
					<?php endif; ?>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if (! get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
					<?php get_template_part('template-parts/mobile-top-bar'); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
