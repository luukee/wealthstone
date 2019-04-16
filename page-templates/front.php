<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<em>
				<a role="button" class="dark hide-for-small-only" href="#intro">scroll down for +</a>
			</em>
		</div>
	</div>
</header>

<!-- INTRO SECTION -->
<section id="intro" class="intro pt-8 pb-4">
	<div class="main-container fluid pb-4">
		<div class="main-grid">
			<section>
				<div class="grid-x grid-margin-x br-top-dark pt-3 pb-3">
					<div class="cell medium-6">
						<h1>Partnerships & Joint Ventures</h1>
						<h3 class="primary">Collaboration –<br>
						Lasting Partnerships.</h3>
					</div>
					<div class="cell medium-6"></div>
				</div>
				<div class="grid-x grid-margin-x pt-3 pb-3">
					<div class="cell medium-6">
						<p>We believe in the power of cooperation and collaboration, aiming for a synergy where each party provides specialized experience and resources to achieve a common success for all. The firm prides itself in its ability to build value in real estate by creating strategic alliances, teamwork, joint ventures and lasting partnerships with companies and individuals.</p>
					</div>
					<div class="cell medium-6">
						<p>Representative partnerships include land owners in need of a development partner, fund managers seeking a closer relationship with their capital deployment, wealth managers looking for real estate solutions for their client, foreign organizations seeking a local partner with boots on the ground to oversee execution, capital managers in search of an execution team and specialized capital & bond placement firms joining forces for specific projects.</p>
						<p>WealthStone, welcomes new ideas and innovative approaches, and is always open to exploring new endeavors.</p>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>




<!-- VIDEO SECTION -->
<div id="section-01 video">
	<div class="grid-frame">
		<div class="cell">
			<!-- https://embedresponsively.com/ -->
			<!-- or http://codegena.com/generator/Youtube-Embed-Code-Generator -->
			<div class='embed-container'>
				<iframe src='https://www.youtube.com/embed/zKu1Y-LlfNQ?modestbranding=1&autohide=1&showinfo=0&controls=0' frameborder='0' allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>


<div class="main-container">
	<div class="main-grid">

		<!-- LEFT IMAGE SECTION -->
		<section id="section-02">
			<div class="grid-x grid-padding-x left-img-container relative">
				<!-- IMAGE block -->
				<div class="cell medium-6 left-image z-down" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/wealthstone-real-estate-investment3.png')">

				</div>
				<!-- TEXT block -->
				<div class="cell flex-container z-up">
					<div class="grid-x align-self-middle br-top-primary">
						<!-- SPACER -->
						<div class="cell medium-7"></div>
						<div class="cell medium-5 pt-3">
							<h2 class="primary">Strong leadership, innovative vision and proven ability to execute.</h2>
							<p>Our cycle-tested management team has successfully navigated 20 years of business cycles and completed over $2 billion of direct real estate transaction and development experience across all major real estate classes. WealthStone is also experienced in sophisticated tax structures, often required for foreign investors.</p>
							<a role="button" class="dark hide-for-small-only em-link primary" href="http://localhost:3000/wealthstone/wealthstone/who-we-are/">+ about us</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- RIGHT IMAGE SECTION -->
		<section id="section-03">
			<div class="grid-x grid-padding-x grid-marin-x right-img-container relative">
				<!-- TEXT block -->
				<div class="cell flex-container z-up">
					<div class="grid-x align-self-middle br-top-primary">
						<div class="cell medium-5 pt-3">
							<h2 class="primary">Laser focus on core strengths and competitive advantages.</h2>
							<p>Our focus is primarily on markets in the U.S. with greater than one million metropolitan area population, particularly those with low unemployment rates, and which demonstrate strong and durable employment growth driven by technology, healthcare, financial services, education and energy sectors.</p>
							<a role="button" class="dark hide-for-small-only em-link primary" href="http://localhost:3000/wealthstone/wealthstone/who-we-are/">+ on investment strategy</a>
						</div>
						<!-- SPACER -->
						<div class="cell medium-7"></div>
					</div>
				</div>
				<!-- IMAGE block -->
				<div class="cell medium-6 right-image z-down" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/wealthstone-real-estate-investment2.png')">

				</div>
			</div>
		</section>

		<!-- LEARN MORE SECTION -->
		<section id="learn-more">
			<div class="grid-x learn-more-footer align-middle">
				<div class="grid-x align-top grid-padding-y grid-margin-y grid-margin-x br-top-primary">
					<div class="cell medium-4">
						<h2 class="primary">Learn more about</h2>
					</div>
					<div class="cell auto">
						<h4>Investment Strategy</h4>
					</div>
					<div class="cell auto">
						<h4>Acquisition Criteria</h4>
					</div>
					<div class="cell auto">
						<h4>Partnerships & Joint Ventures</h4>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>

<?php get_footer();
