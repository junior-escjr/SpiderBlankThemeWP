<?php
/**
 * Block Name: Releases
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section class="lancamentos">
    <img class="v1" src="<?php bloginfo('template_url');?>/static/images/vector1.png" alt="">
    <img class="v2" src="<?php bloginfo('template_url');?>/static/images/vector2.png" alt="">
    <img class="v3" src="<?php bloginfo('template_url');?>/static/images/vector3.png" alt="">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="sec-title mrg-b-22 lh-1"><?php the_field('block-titulo');?></h2>

                <p class="sec-desc"><?php the_field('block-descricao');?></p>
            </div>
        </div>
    </div>

    <div class="lancamentos__slider">
        <div class="lancamentos__slider-container">
            <div class="swiper-wrapper">
                <?php
                $query = new WP_Query(
                    array(
                        'post_type'         => 'lancamentos',
                        'posts_per_page'    => -1
                    )
                );
                
                if ($query->have_posts()): while ($query->have_posts()) : $query->the_post();?>
                    <div class="item swiper-slide">
                        <figure class="lancamentos__slide-photo">
                            <?php if( get_field('pre-venda', $query->post->ID) ) :?>
                                <img class="book-stamp" src="<?php bloginfo('template_url');?>/static/images/book-stamp.png" alt="">
                            <?php endif; ?>

                            <a target="_blank" href="<?php the_field('link_para_a_loja', $query->post->ID);?>">
                                <?php echo odin_thumbnail( 178, 240, get_the_title(), true); ?>
                            </a>
                        </figure>
                        <div class="lancamentos__slide-text">
                            <div class="lancamentos__slide-title"><?php the_title();?></div>
                            <div class="lancamentos__slide-editora"><?php the_field('editora', $query->post->ID);?></div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
            <!-- Add Arrows -->
            <div class="lancamentos__arrows-container">
                <div class="lancamentos__swiper-arrows">
                    <div class="lancamentos__swiper-button-prev">
                    </div>
                    <div class="lancamentos__swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>