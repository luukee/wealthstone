<?php
/*
Template Name: Main Template
*/
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/featured-image' ); ?>

	<?php
// // // FLEXIBLE CONTENT
		if( have_rows('flexible_content') ):

			 // loop through the rows of data
			while ( have_rows('flexible_content') ) : the_row(); ?>

				<!-- LAYOUT ONE -->
				<?php if( get_row_layout() == 'layout_one' ): ?>

					<?php $L1backgroundColor = get_sub_field('L1_background_color'); ?>

					<section id="<?php the_sub_field('L1_section_anchor'); ?>" class="intro pt-3" style="background-color:<?php echo $L1backgroundColor; ?>;">
						<div class="main-container fluid pb-3">
							<div class="main-grid">
								<div class="block-container">
									<section class="layout l1">
										<div class="grid-x br-top-dark pt-3">
											<div class="cell medium-6 copy">

												<?php the_sub_field('text_one'); ?>
												<?php the_sub_field('text_two'); ?>

											</div>
											<div class="cell medium-6">

												<?php the_sub_field('text_three'); ?>

											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</section>

				<!-- LAYOUT TWO -->
				<?php elseif( get_row_layout() == 'layout_two' ): ?>

					<?php get_template_part( 'template-parts/L2-img-left' ); ?>

				<!-- LAYOUT THREE -->
				<?php elseif( get_row_layout() == 'layout_three' ): ?>

					<?php get_template_part( 'template-parts/L3-img-right' ); ?>

				<!-- LAYOUT FOUR -->
				<?php elseif( get_row_layout() == 'layout_four' ): ?>

					<?php get_template_part( 'template-parts/L4-img-left' ); ?>

				<!-- LAYOUT FIVE -->
				<?php elseif( get_row_layout() == 'layout_five' ): ?>

					<?php get_template_part( 'template-parts/L5-img-right' ); ?>

				<!-- LEARN MORE -->
				<?php elseif( get_row_layout() == 'learn_more' ): ?>

					<div class="main-container">
						<div class="main-grid">
							<section id="learn-more" class="layout learn-more">
								<div class="grid-x learn-more-footer align-middle">
									<div class="cell align-top br-top-primary">
										<div class="grid-x links">
											<div class="cell medium-3">

												<h2 class="primary"><?php the_sub_field('LM_title'); ?></h2>

											</div>
											<div class="cell medium-9">
												<div class="grid-x medium-up-3 learn-more-links">
													<div class="cell">

												    	<h4><a href="<?php the_sub_field('LM_post_one_link'); ?>"><?php the_sub_field('LM_post_one_text'); ?></a></h4>

													</div>
													<div class="cell">

														<h4><a href="<?php the_sub_field('LM_post_two_link'); ?>"><?php the_sub_field('LM_post_two_text'); ?></a></h4>

													</div>
													<div class="cell">

														<h4><a href="<?php the_sub_field('LM_post_three_link'); ?>"><?php the_sub_field('LM_post_three_text'); ?></a></h4>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>

			<!-- VIDEO SECTION -->
			<!--  -->    <!--  -->
			<!--  -->    <!--  -->
			<?php elseif( get_row_layout() == 'video' ): ?>
				<!-- VIDEO SECTION -->
				<?php $videoURL = get_sub_field('video_url');
				if( !empty($videoURL) ):  ?>

				<section id="video" class="layout video">
					<div class="grid-frame">
						<div class="cell">
							<!-- https://embedresponsively.com/ -->
							<!-- or http://codegena.com/generator/Youtube-Embed-Code-Generator -->
							<div class='embed-container'>
								<iframe src='<?php echo $videoURL; ?>' frameborder='0' allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</section>

				<!-- end VIDEO SECTION -->
				<?php endif; ?>
			<!-- END get_row_layout -->
			<?php endif; ?>

<?php
// end LAYOUTS
// // //
			endwhile; ?>

		<?php else : ?>

			<!-- no layouts found -->

		<?php endif;
		// // // end FLEXIBLE CONTENT
		?>



<?php endwhile; ?>

<?php get_footer();
