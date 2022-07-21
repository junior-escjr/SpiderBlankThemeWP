<?php
/**
 * Block Name: Feature Posts
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section class="feature-primary pos-r">
    <img class="feature-primary__detail1" src="<?php bloginfo('template_url');?>/static/images/detail-posts-feature.png" alt="">
    <img class="feature-primary__detail2" src="<?php bloginfo('template_url');?>/static/images/detail-posts-feature2.png" alt="">

    <div class="container-extra">
        <div class="row-cf feature-primary__desktop">
            <?php
            $count = 1;

            $query2 = new WP_Query(
				array(
					'posts_per_page' 	=> 	1,
					'meta_key'			=> 	'fixar_post',
					'meta_compare'		=> 	'=',
                    'meta_value' 		=> 	true,
				)
            );
            
            if ($query2->have_posts()) : while ($query2->have_posts()) : $query2->the_post();?>
                <div class="col-feature-1">
                    <figure class="pos-r">
                        <a class="filter-thumb" href="<?php the_permalink();?>">
                            <?php echo odin_thumbnail( 701, 467, get_the_title(),true); ?>

                            <figcaption class="info-about-image has-spacing1">
                                <div class="group-tags-icon">
                                    <?php get_category_current( '', 'color-snow' );?>
                                    <?php echo add_icon_format( $query2->post->ID );?>
                                </div>
                                

                                <h2 class="info-about-image__title bp800:fs-25 bp992:fs-34">
                                    <a class="color-snow" href="<?php the_permalink();?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            

            <?php
            $query = new WP_Query(
				array(
					'posts_per_page' 	=> 	2,
                    'meta_key'			=> 	'destaque_post',
					'meta_compare'		=> 	'=',
                    'meta_value' 		=> 	true,
                    'meta_query' => array(
                        array(
                            'key'     => 'fixar_post',
                            'value'   => true,
                            'compare' => '!=',
                        ),
                    ),
				)
            );
            
            if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();?>
                <div class="col-feature-2">
                    <figure class="pos-r">
                        <a class="filter-thumb" href="<?php the_permalink();?>">
                            <?php echo odin_thumbnail( 349, 468, get_the_title(), true); ?>

                            <figcaption class="info-about-image has-spacing2">
                                <div class="group-tags-icon">
                                    <?php get_category_current( '', 'color-snow' );?>
                                
                                    <?php echo add_icon_format( $query->post->ID );?>
                                </div>

                                <h2 class="info-about-image__title bp800:fs-16 bp992:fs-20">
                                    <a class="color-snow" href="<?php the_permalink();?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>

        <div class="carousel-feature-principal owl-carousel owl-theme feature-primary__mobile">
            <?php
            $query = new WP_Query(
                array(
                    'posts_per_page' 	=> 	3,
                    'meta_key'			=> 	'destaque_post',
                    'meta_compare'		=> 	'=',
                    'meta_value' 		=> 	true
                )
            );
            
            if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>
                <figure class="pos-r">
                    <a class="filter-thumb" href="<?php the_permalink();?>">
                        <?php echo odin_thumbnail( 335, 311, get_the_title(), true); ?>

                        <figcaption class="info-about-image has-spacing1">
                            <div class="group-tags-icon">
                                <?php get_category_current( '', 'color-snow' );?>
                                <?php echo add_icon_format( $query->post->ID );?>
                            </div>

                            <h2 class="info-about-image__title fs-25 bp450:fs-30 bp576:fs-20 bp1200:fs-40">
                                <a class="color-snow" href="<?php the_permalink();?>"><?php the_title(); ?></a>
                            </h2>

                            <!-- <p class="fs-12 fw-bold txt-upper color-snow mrg-b-0">
                                <?php // the_time('j F, Y'); ?>
                            </p> -->
                        </figcaption>
                    </a>
                </figure>
            <?php $count++; endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>