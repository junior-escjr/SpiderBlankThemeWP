<?php get_header(); ?>

	<main class="main" role="main">

		<section class="container">

			<div class="row">

				<div class="col-content">
					<h1><?php single_cat_title(); ?></h1>

					<?php get_template_part('loop-default'); ?>

					<?php get_template_part('pagination'); ?>
				</div>

				<div class="col-side">
					<?php get_sidebar(); ?>
				</div>

			</div>

		</section>

	</main>

<?php get_footer(); ?>
