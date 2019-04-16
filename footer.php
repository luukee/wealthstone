<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">

	<div class="talk-to-us-footer">
		<div class="main-container">
			<div class="main-grid">
				<section class="pre-footer">
					<div class="grid-x grid-padding-x pt-2 pb-4 br-top-dark">
						<div class="cell medium-6">
							<h2>Always available.<br>Always approachable.</h2>
							<a role="button" class="dark hide-for-small-only em-link primary" href="http://localhost:3000/wealthstone/wealthstone/who-we-are/">Talk to us.</a>
						</div>
						<div class="cell medium-6">

							<p>+1 323 406 8505 / main<br>+1 323 201 7598 / fax</p>
							<br>
							<p>hello@wealthstonellc.com</p>
							<br>
							<p>1880 Century Park East, Suite 1014<br>Los Angeles, CA 90016, USA</p>

						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<?php if ( is_front_page() ) : ?>

		<section class="footer-hero">
			<div class="grid-x align-center">
				<!-- <div class="cell medium-5 light align-self-middle"> -->
				<div class="orbit cell medium-5 light align-self-middle" role="region" aria-label="Favorite Text Ever" data-orbit>
  					<ul class="orbit-container">

					<?php

					// check if the repeater field has rows of data
					if( have_rows('repeater') ):
						// loop through the rows of data
					  while ( have_rows('repeater') ) : the_row(); ?>

					  <li class="orbit-slide">
  						  <blockquote>
  	  							<h3>“</h3>
								<h3><?php the_sub_field('quote'); ?></h3>
								<br>
								<h3>– <?php the_sub_field('quote_author'); ?></h3>
						  </blockquote>
					  </li>
					  <?php endwhile;

					else :

					  // no rows found

					endif;

					?>
				</ul>
			</div>
				</div>
			<!-- </div> -->
		</section>

 	<?php endif; ?>

	<!-- MAIN FOOTER -->
	<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>

	<!-- SECONDARY FOOTER -->
	<div class="secondary-footer plain-font">
		<div class="grid-x secondary-container align-middle">
			<div class="cell medium-6">
				<a href="http://localhost/wealthstone/wealthstone/legal-disclaimer/">Legal Disclaimer</a>
			</div>
			<div class="cell medium-6 copywright">
				<p>©2019 WealthStone LLC. All rights reserved</p>
			</div>
		</div>
	</div>

</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
