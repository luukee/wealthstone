<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>

<?php if ( is_front_page() ) : ?>

		<header class="front-hero front scene_element scene_element--fadein" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'fp-small' ); ?>, small], [<?php the_post_thumbnail_url( 'fp-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'fp-large' ); ?>, large], [<?php the_post_thumbnail_url( 'fp-xlarge' ); ?>, xlarge]">

			<div class="marketing scene_element scene_element--fadeinup">
				<div class="tagline" >
					<?php if ( get_bloginfo( 'description' )  !== '' ) { ?>
						<h4 class="site-description subheader">
							<?php bloginfo( 'description' ); ?>
						</h4>
					<?php } ?>
					<p>
						<em>
							<a href="#intro">scroll down for +</a>
						</em>
					</p>
				</div>
			</div>
		</header>

	<?php else : ?>

		<header class="front-hero scene_element scene_element--fadein" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'fp-small' ); ?>, small], [<?php the_post_thumbnail_url( 'fp-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'fp-large' ); ?>, large], [<?php the_post_thumbnail_url( 'fp-xlarge' ); ?>, xlarge]">


		</header>

	<?php endif; ?>


<?php endif; ?>
