<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php // get_template_part( 'template-parts/featured-image' ); ?>
	<div class="main-container">
		<div class="main-grid">
			<main class="main-content-full-width">
				<section>
					<?php
						// if ( is_single() ) {
						// 	the_title( '<h1 class="entry-title">', '</h1>' );
						// } else {
						// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						// }
					?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="grid-x br-top-dark pt-1 mt-4">
							<div class="cell">
								<h2>Always available.</br>
								Always approachable.</h2>
							</div>
						</div>
						<div class="grid-x grid-margin-x pt-2 pb-4 get-in-touch">
							<div class="cell medium-6">
								<p class="primary">get in touch</p>
								<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
								<div class="embed-container">
									<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.2967343236287!2d-118.416353884837!3d34.06190682466818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bbf490292e85%3A0xc63207e03240a7d7!2s1880+Century+Park+E+%231014%2C+Los+Angeles%2C+CA+90067!5e0!3m2!1sen!2sus!4v1555416298271!5m2!1sen!2sus' width='100%' height='auto' frameborder='0' style='border:0' allowfullscreen></iframe>
								</div>

								<br>

								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">
									1880 Century Park East, Suite 1014
									</span>
									<br>
								  <span itemprop="addressLocality">Los Angeles</span>,
								  <span itemprop="addressRegion">CA</span>
								  <span itemprop="postalCode">90016</span>, USA
								</div>

								<br>

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

								<p><a href="mailto:Hello@WealthStoneLLC.com" itemprop="email">Hello@WealthStoneLLC.com</a></p>

							</div>
							<div class="cell medium-6">
								<?php the_content(); ?>
							</div>
						</div>

					<?php endwhile; ?>
				</section>
			</main>
		</div>
	</div>
</article>
<?php get_footer();
