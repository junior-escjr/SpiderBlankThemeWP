<?php get_header(); ?>

	<!-- main -->
	<main role="main" class="content">

		<!-- section -->
		<section class="container">

			<!-- row -->
			<div class="row">

				<!-- col-lg-8 -->
				<div class="col-lg-8">
					<!-- article -->
					<article id="post-404">

						<h1>Página não encontrada</h1>
						<h2>
							<a href="<?php echo home_url(); ?>">Retorma para home</a>
						</h2>

					</article>
					<!-- /article -->
				</div>
				<!-- /col-lg-8 -->

				<!-- col-lg-4 -->
				<div class="col-lg-4">
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
