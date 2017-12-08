<?php get_header(); ?>

	<main class="main" role="main">
	
		<section class="container">

			<div class="row">

				<div class="col-content">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<figure>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(); // Fullsize image for the single post ?>
									</a>
								</figure>
							<?php endif; ?>

							<h1>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h1>

							<!-- post details -->
							<time class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></time>
							<span class="author"><?php _e( 'Published by', 'spiderblank' ); ?> <?php the_author_posts_link(); ?></span>
							<span class="number-comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'spiderblank' ), __( '1 Comment', 'spiderblank' ), __( '% Comments', 'spiderblank' )); ?></span>
							<!-- /post details -->

							<?php the_content(); ?>

							<?php the_tags( __( 'Tags: ', 'spiderblank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

							<p><?php _e( 'Categorised in: ', 'spiderblank' ); the_category(', '); // Separated by commas ?></p>

							<p><?php _e( 'This post was written by ', 'spiderblank' ); the_author(); ?></p>

							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

							<?php comments_template(); ?>

						</article>

					<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="col-side">
					<?php get_sidebar(); ?>
				</div>

			</div>

		</section>

	</main>

<?php get_footer(); ?>
