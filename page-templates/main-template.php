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
				<!--  --> <!--  -->
				<!--  --> <!--  -->
				<?php if( get_row_layout() == 'layout_one' ): ?>

					<section id="<?php the_sub_field('L1_section_anchor') ?>" class="intro pt-3 pb-4" style="background: #F9F9F9;">
						<div class="main-container fluid pb-3">
							<div class="main-grid">
								<section class="layout l1">

										<?php if( get_sub_field('side_or_bottom') == 'side' ): ?>

											<div class="grid-x br-top-dark pt-3 pb-3">
												<div class="cell medium-6 copy">

													<?php the_sub_field('text_one'); ?>
													<?php the_sub_field('text_two'); ?>

												</div>
												<div class="cell medium-6">

													<?php the_sub_field('text_three'); ?>

												</div>
											</div>

										<?php elseif( get_sub_field('side_or_bottom') == 'bottom' ): ?>

											<div class="grid-x br-top-dark pt-2 pb-3">
												<div class="cell medium-6 copy">

														<?php the_sub_field('text_one'); ?>
														<?php the_sub_field('text_two'); ?>

												</div>
												<div class="cell medium-6"></div>
											</div>
											<div class="grid-x grid-margin-x pb-3">
												<div class="cell medium-12 columns-2">

													<?php the_sub_field('text_three'); ?>

												</div>
											</div>

										<?php endif; ?>

									</div>
								</section>
							</div>
						</div>
					</section>

				<!-- LAYOUT TWO -->
				<!--  image left, text-right  -->
				<!--  --> <!--  -->
				<?php elseif( get_row_layout() == 'layout_two' ): ?>

					<div class="main-container">
						<div class="main-grid">
							<section id="<?php the_sub_field('L2_section_anchor') ?>" class="layout l-r">
			 					<div class="grid-x grid-padding-x left-img-container relative">
									<!-- L2 IMAGE -->
										<?php $L2_image = get_sub_field('L2_image');
											$L2_image_url = $L2_image['url'];
											$L2_image_alt = $L2_image['alt'];
										if( !empty($L2_image) ):  ?>

											<div class="cell medium-6 left-image z-down" style="background-image: url('<?php echo $L2_image_url; ?>')" alt='<?php echo $L2_image_alt; ?>'></div>

										<?php endif; ?>

									<!-- end L2 IMAGE -->

											<?php if( get_sub_field('L2_side_or_bottom') == 'side' ): ?>

												<div class="cell flex-container z-up">
													<div class="grid-x br-top-primary">
														<div class="cell medium-7"></div>
														<div class="cell medium-5 copy">

															<?php the_sub_field('L2_text_one'); ?>
															<?php the_sub_field('L2_text_two'); ?>
															<?php the_sub_field('L2_text_three'); ?>

															<?php if( get_sub_field('L2_read_more_link_text') ): ?>

																<!-- LAYOUT 2 SIDE TOGGLE link-->
																<a data-toggle="<?php the_sub_field('L2_section_anchor') ?>-side" class="toggle-button">
																	<?php the_sub_field('L2_read_more_link_text'); ?>
																</a>
															<?php endif; ?>
															<?php if( get_sub_field('L2_read_more') ): ?>
																<!-- LAYOUT 2 SIDE TOGGLE content-->
																<div class="grid-x entry-content" id="<?php the_sub_field('L2_section_anchor') ?>-side" data-closable data-toggler data-animate="fade-in fade-out">
																	<p><?php the_sub_field('L2_read_more'); ?></p>
																	<a data-close class="read-less">read less</a>
																</div>

															<?php endif; ?>

														</div>
													</div>
												</div>

										<?php elseif( get_sub_field('L2_side_or_bottom') == 'bottom' ): ?>

											<div class="cell flex-container z-up">
												<div class="grid-x br-top-primary content-holder">
													<div class="cell medium-7"></div>
													<div class="cell medium-5 copy">

															<?php the_sub_field('L2_text_one'); ?>
															<?php the_sub_field('L2_text_two'); ?>
															<?php the_sub_field('L2_text_three'); ?>
															<?php if( get_sub_field('L2_read_more') ): ?>

															<a data-toggle="<?php the_sub_field('L2_section_anchor') ?>" class="toggle-button">
																<?php the_sub_field('L2_read_more_link_text'); ?>
															</a>

															<?php endif; ?>
													</div>
												</div>
											</div>


										<?php endif; ?>

								</div>
							</section>

							<?php if( get_sub_field('L2_read_more') ): ?>

								<section class="read-more">
									<div class="grid-x entry-content" id="<?php the_sub_field('L2_section_anchor') ?>" data-closable data-toggler data-animate="fade-in fade-out">
										<p><?php the_sub_field('L2_read_more'); ?></p>
										<a data-close class="read-less">read less</a>
									</div>
								</section>

							<?php endif; ?>

						</div>
					</div>

				<!-- LAYOUT THREE -->
			<!--  text left, image right -->
				<!--  -->   <!--  -->
				<?php elseif( get_row_layout() == 'layout_three' ): ?>

					<div class="main-container">
						<div class="main-grid">
							<section class="layout l-r" id="<?php the_sub_field('L3_section_anchor') ?>">
								<div class="grid-x grid-padding-x grid-marin-x right-img-container relative">
									<div class="cell flex-container z-up">
										<div class="grid-x br-top-primary content-holder">
											<div class="cell medium-5 copy">

												<?php the_sub_field('L3_text_one'); ?>
												<?php the_sub_field('L3_text_two'); ?>
												<?php the_sub_field('L3_text_three'); ?>
												<?php if( get_sub_field('L3_read_more_link_text') ): ?>

														<!-- toggle button -->
						                                <a data-toggle="<?php the_sub_field('L3_section_anchor') ?>" class="toggle-button">
															<?php the_sub_field('L3_read_more_link_text'); ?>
														</a>

												<?php endif; ?>


												<!-- SIDE CONTENT -->
												<?php if( get_sub_field('L3_side_or_bottom') == 'side' ): ?>
													<?php if( get_sub_field('L3_read_more') ): ?>

														<div class="grid-x entry-content" data-toggle="<?php the_sub_field('L3_section_anchor') ?>" data-closable data-toggler data-animate="fade-in fade-out">

															<?php the_sub_field('L3_read_more'); ?>

															<a data-close >read less</a>
														</div>

													<?php endif; ?>
												<?php endif; ?>
												<!-- END side content -->


											</div>
											<div class="cell medium-7"></div>
										</div>
									</div>

									<!-- L3 IMAGE -->
									<?php $L3_image = get_sub_field('L3_image');
										$L3_image_url = $L3_image['url'];
										$L3_image_alt = $L3_image['alt'];
									if( !empty($L3_image) ):  ?>

									<div class="cell medium-6 right-image z-down" style="background-image: url('<?php echo $L3_image_url; ?>')" alt='<?php echo $L3_image_alt; ?>'></div>

									<?php endif; ?>
									<!-- end L3 IMAGE -->

								</div> <!-- END right-img-container -->

								<!-- L3 BOTTOM CONTENT -->
								<?php if( get_sub_field('L3_read_more') ): ?>

									<div class="grid-x entry-content" id="<?php the_sub_field('L3_section_anchor'); ?>" data-closable data-toggler data-animate="fade-in fade-out">
										<p><?php the_sub_field('L3_read_more'); ?></p>
										<a data-close class="read-less">read less</a>
									</div>

								<?php endif; ?>
								<!-- end L3 BOTTOM CONTENT -->

							</section>

						</div>
					</div>

				<!-- LEARN MORE -->
				<!--  --> <!--  -->
				<!--  --> <!--  -->
				<?php elseif( get_row_layout() == 'learn_more' ): ?>

					<div class="main-container">
						<div class="main-grid">
							<section id="learn-more" class="layout learn-more">
								<div class="grid-x learn-more-footer align-middle">
									<div class="cell align-top br-top-primary">
										<div class="grid-x grid-padding-y grid-margin-y links">
											<div class="cell medium-3">
												<h2 class="primary">

													<?php the_sub_field('LM_title'); ?>

												</h2>
											</div>
											<div class="cell medium-3">

										    	<h4><a href="<?php the_sub_field('LM_post_one_link'); ?>"><?php the_sub_field('LM_post_one_text'); ?></a></h4>

											</div>
											<div class="cell medium-3">

												<h4><a href="<?php the_sub_field('LM_post_two_link'); ?>"><?php the_sub_field('LM_post_two_text'); ?></a></h4>

											</div>
											<div class="cell medium-3">

												<h4><a href="<?php the_sub_field('LM_post_threea_link'); ?>"><?php the_sub_field('LM_post_three_text'); ?></a></h4>

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
								<iframe src='<?php echo $videoURL; ?>?modestbranding=1&autohide=1&showinfo=0&controls=0' frameborder='0' allowfullscreen></iframe>
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
