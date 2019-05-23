<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title hide">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title hide"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header>

	<div class="grid-x align-center pt-4 pb-4">
		<div class="cell medium-8 text-center">
			<?php

			if( is_user_logged_in() ) { ?>

			<h3 class="primary"><em>You are currently logged in.</em></h3>
			<?php
			 wp_loginout( get_permalink() ); // Display "Log Out" link.
			?>

		<?php } else { the_content(); ?>
			<h3>Already a member?
				<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Login' ) ) ); ?>" title="Login">Login</a></h3>
		<?php } ?>
		</div>
	</div>


</article>
