<?php get_header(); ?>

	<!-- main -->
	<main role="main" class="content">

		<!-- section -->
		<section class="container">

			<!-- row -->
			<div class="row">

				<!-- col-lg-8 -->
				<div class="col-content">
					<!-- article -->
					<article id="post-404">

						<h1>Error 404</h1>
						<h2><?php _e('Page not found', 'spiderblank'); ?></h2>
						<h3>
							<a href="<?php echo home_url(); ?>"><?php _e('Return to home', 'spiderblank'); ?></a>
						</h3>

					</article>
					<!-- /article -->
				</div>
				<!-- /col-lg-8 -->

				<!-- col-lg-4 -->
				<div class="col-side">
					<?php get_sidebar(); ?>
				</div>
				<!-- /col-lg-4 -->

			</div>
			<!-- /row -->

		</section>
		<!-- /section -->

	</main>
	<!-- /main -->

<?php get_footer(); ?>
