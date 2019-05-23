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
					<div class="grid-x grid-padding-x pt-2 br-top-dark">
						<div class="cell medium-6 mb-2">
							<h2>Always available.<br>Always approachable.</h2>
							<a role="button" class="em-link primary" href="/talk-to-us/#full-width">Talk to us.</a>
						</div>
						<div class="cell medium-6">

							<div itemscope itemtype="http://schema.org/LocalBusiness">
								<span itemprop="name" class="off-page">WealthStoneLLC</span>
								<span itemprop="telephone">
									<a href="tel: +1-323-406-8505">+1 323 406 8505</a> / main
							    </span>
								<br>
								<span itemprop="fax">
									<a href="fax: +1-323-201-7598">+1 323 201 7598</a> / fax
								</span>
							</div>

							<br>

							<p>
								<a href="mailto:Hello@WealthStoneLLC.com" itemprop="email">Hello@WealthStoneLLC.com</a>
							</p>

							<br>

							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<span itemprop="streetAddress">
								1880 Century Park East, Suite 1014
								</span>
								<br>
							  <span itemprop="addressLocality">Los Angeles</span>,
							  <span itemprop="addressRegion">CA</span>
							  <span itemprop="postalCode">90067</span>, USA
							</div>

						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<?php if ( is_front_page() ) : ?>

		<?php

		$image = get_field('image');

		if( !empty($image) ): ?>

			<style>
			.footer-hero {
				background: url("<?php echo $image['url']; ?>") bottom center;
				}
			</style>

		<?php endif; ?>

		<section class="footer-hero">
			<div class="grid-x align-center">
				<div class="cell medium-6">
					<div class="orbit" role="region" data-orbit>
						<ul class="orbit-container">

							<?php

							// check if the repeater field has rows of data
							if( have_rows('repeater') ):
								// loop through the rows of data
							  while ( have_rows('repeater') ) : the_row(); ?>

							  <li class="orbit-slide">

								<blockquote>
									<?php the_sub_field('quote'); ?>
									<footer>
										<cite><?php the_sub_field('quote_author'); ?></cite>
									</footer>
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
			</div>
			<!-- </div> -->
		</section>

 	<?php endif; ?>

	<!-- MAIN FOOTER -->
	<div class="footer-grid grid-x small-1 medium-2">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>

	<!-- SECONDARY FOOTER -->
	<div class="secondary-footer plain-font">
		<div class="grid-x main-container secondary-container align-middle">
				<div class="cell medium-4 text-left">
					<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=6aqUApTV3ZgWylxy3AMgAJpY0JFu4avdZgCyKfGyV2EcmujMK46VpxiiGlvc"></script></span>
				</div>
				<div class="cell medium-4 text-center">
					<p><a href="wealthstone/wealthstone/legal-disclaimer/">Legal Disclaimer</a></p>
				</div>
				<div class="cell medium-4 copywright">
					<p>©2019 WealthStone LLC. All rights reserved</p>
				</div>
		</div>
	</div>

	<!-- Begin Web-Stat code v 6.3 -->

	<span id="wts1869269">&nbsp;</span><script>

	var wtsh = {};

	wtsh['invisible']='#';

	wtsh['text_counter']='#';

	wtsh['page_name']= 'some_name';

	wtsh['page_group']='#';

	wtsh['conversion_number']='#';

	var wts=document.createElement('script');wts.type='text/javascript';

	wts.async=true;wts.src='https://wts.one/4/1869269/log6_2.js';

	document.getElementById('wts1869269').appendChild(wts);

	</script><noscript><a href="https://www.web-stat.com">

	<img src="https://wts.one/6/4/1869269.gif"

	alt="Web-Stat site statistics"></a></noscript>

	<!-- End Web-Stat code v 6.3 -->

</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
