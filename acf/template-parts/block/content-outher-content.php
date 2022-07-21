<?php
/**
 * Block Name: Branded Content
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="outher-contents">
    <img class="outher-contents__v1" src="<?php bloginfo('template_url');?>/static/images/vector-outher-content1.png" alt="">
    <img class="outher-contents__v2" src="<?php bloginfo('template_url');?>/static/images/vector-outher-content2.png" alt="">

    <div class="container">
        <!-- <h2 class="outher-contents__title"><?php //the_field('block-titulo');?></h2>

        <div class="separator has-style4"></div> -->

        <div class="row">
            <?php
            $query = new WP_Query(
				array(
					'posts_per_page' 	=> 	4,
					'meta_key'			=> 	'destaque_post',
					'meta_compare'		=> 	'=',
                    'meta_value' 		=> 	true,
                    'offset'            =>  3,
                    'cat'		        =>	'-145',
				)
            );
            
            if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();?>
                <article class="col-12 bp660:col-6 bp880:col-3">
                    <div class="card is_media-for-card">
                        <div class="card__image mrg-b-25">
                            <figure class="pos-r">
                                <a href="<?php the_permalink();?>">
                                    <?php echo odin_thumbnail( 400, 263, get_the_title(),true); ?>
                                </a>
                            </figure>
                        </div>
                        <div class="card__body">
                            <div class="group-tags-icon">
                                <?php get_category_current();?>
                                <?php echo add_icon_format( $query->post->ID, ' is-style1' );?>
                            </div>
                
                            <h3 class="card__title">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                    </div>
                </article>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>

    </div>
</section>