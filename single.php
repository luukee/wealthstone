<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content mt-4 pt-4">
			<?php while ( have_posts() ) : the_post(); ?>

				<img class="featured-hero card single-main-image" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
				</img>

				<?php get_template_part( 'template-parts/content', '' ); ?>
			<?php endwhile; ?>

		</main>

		<section class="pre-footer">
			<div class="grid-x grid-padding-x mt-2 br-top-dark">

			</div>
		</section>

		<footer>

			<div class= "grid-x cards-container grid-margin-x grid-padding-x pt-4">

				<?php
				$currentID = get_the_ID();
				$my_query = new WP_Query( array('cat' => 'news', 'showposts' => '5', 'post__not_in' => array($currentID)));
				while ( $my_query->have_posts() ) : $my_query->the_post();
				get_template_part( 'template-parts/news-archive-thumb' );
				endwhile; ?>

			</div>
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>

			<?php
				wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);
			?>
			<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
		</footer>
	</div>
</div>
<?php get_footer();
