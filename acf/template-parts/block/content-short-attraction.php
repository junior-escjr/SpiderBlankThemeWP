<?php
/**
 * Block Name: Short Attraction
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$repeaterAttraction = get_field('block-repeater-atracoes');
?>

<section class="short-attraction">
    <img class="v1" src="<?php bloginfo('template_url');?>/static/images/attraction-el1.png" alt="">
    <img class="v2" src="<?php bloginfo('template_url');?>/static/images/attraction-el2.png" alt="">
    <img class="v3" src="<?php bloginfo('template_url');?>/static/images/attraction-el3.png" alt="">

    <div class="container">
        <div class="row">
            <div class="col-12 bp768:col-5">
                <h2 class="sec-title mrg-b-22 lh-1"><?php the_field('block-titulo');?></h2>

                <div class="sec-desc"><?php the_field('block-descricao');?></div>
            </div>
        </div>
    </div>

    <div class="short-attraction__slider">
        <div class="short-attraction__slider-container">
            <div class="swiper-wrapper">
                <?php if( $repeaterAttraction ) : 
                    foreach( $repeaterAttraction as $key => $a ) :?>
                        <div class="item swiper-slide">
                            <figure class="short-attraction__slide-photo">
                                <img src="<?php echo odin_get_image_url($a['foto']['ID'], 298, 238);?>" alt="<?php echo $a['nome_do_participante']?>">
                            </figure>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>
            <!-- Add Arrows -->
            <div class="lancamentos__arrows-container">
                <div class="lancamentos__swiper-arrows">
                    <div class="short-attraction__swiper-button-prev"></div>
                    <div class="short-attraction__swiper-button-next"></div>
                </div>
            </div>
        </div>

        <div class="txt-center mrg-t-31 pos-r">
            <a class="btn has-style4 is-round" href="<?php bloginfo('url');?>/atracoes/">Veja a lista completa</a>
        </div>
    </div>
</section>