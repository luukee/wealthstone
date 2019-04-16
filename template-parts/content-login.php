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
	<header class="login">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header>

	<div class="content">
		<div class="greeting">
			<p>Existing Investors.</p>
			<p class="primary ">Investor satisfaction is our highest priority.</p>
		</div>

		<?php the_content(); ?>
		<?php //wp_login_form( array('redirect' => home_url()) ); ?>
		<div class="grid-x align-center">
			<div class="cell medium-4 login-form">
				<?php
		        wp_login_form( array(
		           'redirect'       => home_url(),
		           'id_username'    => 'user',
		           'id_password'    => 'pass',
		           'remember'       => false,
		           'label_username' => '',
		           'label_password' => '',
		           'label_log_in'   => __( 'Log In' ),
		           ) );
		           ?>
			</div>
		</div>
		<div class="grid-x align-center">
			<div class="cell medium-3 text-center">
				<a href="/wp-login.php?action=lostpassword">Forgot password?</a>
			</div>
			<div class="cell medium-3 text-center">
				<a href="http://localhost/wealthstone/wealthstone/wp-login.php?action=register">Not a member yet?</a>
				<a href="<?php echo wp_registration_url(); ?>">Register</a>

			</div>
		</div>

	</div>
</article>


<script>
// ----------------------------------------------------
// Adding the placeholders in textfields of login form
// ----------------------------------------------------

jQuery(document).ready(function($) {

$('#loginform input[type="text"]').attr('placeholder', 'Username');
$('#loginform input[type="password"]').attr('placeholder', 'Password');

$('#loginform label[for="user_login"]').contents().filter(function() {
	return this.nodeType === 3;
}).remove();
$('#loginform label[for="user_pass"]').contents().filter(function() {
	return this.nodeType === 3;
}).remove();

$('input[type="checkbox"]').click(function() {
	$(this+':checked').parent('label').css("background-position","0px -20px");
	$(this).not(':checked').parent('label').css("background-position","0px 0px");
});

});
</script>
