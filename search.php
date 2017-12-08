<?php get_header(); ?>

	<main role="main" class="content">
		<!-- section -->
		<section class="container">

			<!-- row -->
			<div class="row">

				<!-- col-lg-8 -->
				<div class="col-content">
					<h1>Resultado da busca <?php echo get_search_query(); ?></h1>

					<?php get_template_part('loop-default'); ?>

					<?php get_template_part('pagination'); ?>
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

<?php get_sidebar(); ?>

<?php get_footer(); ?>
