<?php get_header(); ?>

	<main role="main" class="content">

		<div class="container">

			<div class="row">

				<div class="col-content">

					<h1>Arquivos</h1>

					<?php get_template_part('loop-default'); ?>

					<?php get_template_part('pagination'); ?>

				</div>

				<div class="col-side">
					<?php get_sidebar(); ?>
				</div>

			</div>

		</div>

	</main>

<?php get_footer(); ?>
