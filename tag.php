<?php get_header(); ?>

	<main class="main" role="main">

		<div class="container">

			<div class="row">

				<div class="col-content">
					<h1><?php echo single_tag_title('', false); ?></h1>

					<?php get_template_part('loop-default.php'); ?>

					<?php get_template_part('pagination'); ?>
				</div>

				<div class="col-side">
					<?php get_sidebar(); ?>
				</div>

			</div>

		</div>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
