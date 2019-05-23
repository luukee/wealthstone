<?php
/*
Template Name: Welcome
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php // get_template_part( 'template-parts/featured-image' );?>
	<div class="main-container pb-4">
		<section class="slim-container pb-4 text-center">
			<?php
                if (is_single()) {
                    the_title('<h1 class="entry-title text-center">', '</h1>');
                } else {
                    the_title('<h2 class="entry-title text-center"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                }
            ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>

			<?php endwhile; ?>
		</section>
	</div>
</article>
<?php get_footer();
