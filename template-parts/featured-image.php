<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>

	<header class="front-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'fp-small' ); ?>, small], [<?php the_post_thumbnail_url( 'fp-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'fp-large' ); ?>, large], [<?php the_post_thumbnail_url( 'fp-xlarge' ); ?>, xlarge]">

		<?php if ( is_front_page() ) : ?>

			<div class="marketing">
				<div class="tagline">
					<?php if ( get_bloginfo( 'description' )  !== '' ) { ?>
						<h4 class="site-description subheader">
							<?php bloginfo( 'description' ); ?></p>
					<?php } ?>
					<p>
						<em>
							<a href="">scroll down for +</a>
						</em>
					</p>
				</div>
			</div>

		<?php endif; ?>

	</header>

<?php endif; ?>
