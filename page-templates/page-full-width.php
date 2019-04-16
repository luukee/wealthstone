<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'fp-xlarge' );?>
<style media="screen">
	.front-hero {
		background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;
		background-size: cover;
	}
</style>
<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
		</div>
	</div>
</header>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php // get_template_part( 'template-parts/featured-image' ); ?>
	<div class="main-container">
		<div class="main-grid">
			<main class="main-content-full-width">
				<section>
					<?php
						if ( is_single() ) {
							the_title( '<h1 class="entry-title">', '</h1>' );
						} else {
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						}
					?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>

					<?php endwhile; ?>
				</section>
			</main>
		</div>
	</div>
</article>
<?php get_footer();
