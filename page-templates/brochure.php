<?php
/*
Template Name: Brochure
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('brochure'); ?>>
	<?php // get_template_part( 'template-parts/featured-image' );?>
	<div class="main-container">
		<div class="main-grid">
			<main class="main-content-full-width">
				<section>

					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>

					<?php endwhile; ?>
				</section>
			</main>
		</div>
	</div>
</article>
<?php get_footer();
