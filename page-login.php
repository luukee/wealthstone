<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container pt-3">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="grid-x align-center">
					<?php

				    if( is_user_logged_in() ) { ?>


					   <style>
					   	.rmagic {
					   		display: none;
					   	}
					   </style>
					   <div class="cell medium-6 text-center pb-4">
						   <h1>Welcome</h1>
						   <h3 class="primary">
							<em>We’re updating the investor dashboard.</em>
						   </h3>
						   <h3 class="primary">
							   <em>You’ll receive an email as soon as new investment information is available.</em>
						   </h3>
						   <?php
							wp_loginout( home_url() ); // Display "Log Out" link.
						   ?>
					   </div>
			   </div>

				   <?php } else { ?>

				<div class="grid-x align-center pb-4">
					<div class="cell greeting text-center">
						<h1>Log In</h1>
						<p>Existing Investors.</p>
						<p class="primary">Investor satisfaction is our highest priority.</p>
					</div>
					<div class="cell medium-5 text-center">
						<?php
						$args = array(
							'echo'           => true,
							'remember'       => false,
							'redirect'       => get_permalink(),
							'form_id'        => 'loginform',
							'id_username'    => 'user_login',
							'id_password'    => 'user_pass',
							'id_remember'    => 'rememberme',
							'id_submit'      => 'wp-submit',
							'label_username' => __( '' ),
							'label_password' => __( '' ),
							'value_remember' => false
						);
						wp_login_form( $args );
						?>
					</div>
					<div class="cell">
						<div class="grid-x align-center">
							<div class="cell medium-3 text-center">
									<a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>">Forgot Password?</a>
							</div>
							<div class="cell medium-3 text-center">
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Register' ) ) ); ?>">Not a member yet?</a>
							</div>
						</div>
					</div>
					    <?php }

						?>

				</div>

			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php
get_footer();
