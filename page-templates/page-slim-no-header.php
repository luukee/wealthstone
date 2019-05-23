<?php
/*
Template Name: Slim, No Header
*/
get_header(); ?>

<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'fp-xlarge');?>
<style media="screen">
	.front-hero {
		background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;
		background-size: cover;
	}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="main-container">
		<section class="slim-container">
			<?php
                if (is_single()) {
                    the_title('<h1 class="entry-title">', '</h1>');
                } else {
                    the_title('<h2 class="entry-title">', '</h2>');
                }
            ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>

			<?php endwhile; ?>

			<!-- FAQ section -->
			<?php $i = 0; ?>
			<?php if( have_rows('faq_section_repeater') ): ?>

			<div class="faq-container">

				<?php while( have_rows('faq_section_repeater') ): the_row();

				// vars
				$faqSectionTitle = get_sub_field('faq_section_title');

				?>

						<!-- SECTION TITLE -->
						<?php if( $faqSectionTitle ): ?>
							<h4>
								<b>
									<i><?php echo $faqSectionTitle; ?></i>
								</b>
							</h4>
						<?php endif; ?>


						<!-- SECOND REPEATER -->
						<?php $p = 0; ?>
						<?php if( have_rows('faq') ): ?>

						<ul class="accordion" data-responsive-accordion-tabs="accordion medium-accordion large-accordion">


							<?php while( have_rows('faq') ): the_row();

								// vars
								$question = get_sub_field('question');
								$answer = get_sub_field('answer');

								?>

							<li class="accordion-item" data-accordion-item>

									<!-- question -->
									<?php if( $question ): ?>
										<a href="#" class="accordion-title"><?php echo $question; ?></a>
									<?php endif; ?>

									<!-- answer -->
									<?php if( $answer ): ?>
										<div class="accordion-content" data-tab-content><?php echo $answer; ?></div>
									<?php endif; ?>

							</li>

							<?php endwhile; ?>

						</ul>

						<?php $p++; ?>
						<?php endif; ?>

						<!-- end SECOND REPEATER -->

				<?php endwhile; ?>

			</div>

			<?php $i++; ?>
			<?php endif; ?>

			<!-- end FIRST REPEATER -->


		</section>
	</div>
</article>
<?php get_footer();
