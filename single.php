<?php get_header(); ?>

	<!-- main -->
	<main class="content" role="main">
		
	<!-- section -->
		<section class="container">

			<!-- row -->
			<div class="row">

				<!-- col-lg-8 -->
				<div class="col-lg-8">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->

							<!-- post title -->
							<h1>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h1>
							<!-- /post title -->

							<?php the_content(); ?>

							<?php comments_template(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<!-- /col-lg-8 -->

				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>

			</div>
			<!-- /row -->


		</section>
		<!-- /section -->

	</main>
	<!-- /main -->

<?php get_footer(); ?>
