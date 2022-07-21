<?php
/**
 * Block Name: Feature Programming, Attraction and Tickets
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$count = 0;
$rowFeature = get_field('destaques-repeater');
$rowFeatureMobile = get_field('destaques-repeater');
?>

<?php if( $rowFeature ) : ?>
    <section class="feature-p-a-t pos-r">
        <img class="feature-primary__detail1" src="<?php bloginfo('template_url');?>/static/images/detail-posts-feature.png" alt="">
        <img class="feature-primary__detail2" src="<?php bloginfo('template_url');?>/static/images/detail-posts-feature2.png" alt="">

        <div class="container-extra">
            <div class="row-cf feature-primary__desktop">

                <?php foreach( $rowFeature as $rf ) :
                    if( $count == 0 ) :?>
                        <div class="col-feature-1">
                            <figure class="pos-r">
                                <a class="filter-thumb" href="<?php echo $rf['link'];?>">
                                    <img src="<?php echo odin_get_image_url( $rf['imagem'],  701, 467, get_the_title(), true ); ?>" alt="<?php echo strip_tags( $rf['titulo'] );?>">
                                </a>
                                <figcaption class="info-about-image has-spacing1">
                                    <h2 class="info-about-image__title">
                                        <a class="color-snow" href="<?php echo $rf['link'];?>">
                                            
                                            <?php echo $rf['titulo'];?>
                                        </a>
                                    </h2>

                                    <a class="btn has-style5 is-round" href="<?php echo $rf['link'];?>">
                                        <?php echo $rf['texto_do_botao'];?>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                    
                    <?php else: ?>
                        <div class="col-feature-2">
                            <figure class="pos-r">
                                <a class="filter-thumb" href="<?php echo $rf['link'];?>">
                                    <img src="<?php echo odin_get_image_url( $rf['imagem'], 349, 468, get_the_title(), true ); ?>" alt="<?php echo strip_tags( $rf['titulo'] );?>">
                                </a>

                                <figcaption class="info-about-image has-spacing2">
                                    <h2 class="info-about-image__title">
                                        <a class="color-snow" href="<?php echo $rf['link'];?>">
                                            <?php echo $rf['titulo'];?>
                                        </a>
                                    </h2>

                                    <a class="btn has-style5 is-round" href="<?php echo $rf['link'];?>">
                                        <?php echo $rf['texto_do_botao'];?>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                    <?php endif; ?>
                <?php $count++; endforeach; ?>

            </div>

            <div class="carousel-feature-principal owl-carousel owl-theme feature-primary__mobile">
                <?php foreach( $rowFeatureMobile as $rfm ) : ?>
                    <figure class="pos-r">
                        <a class="filter-thumb" href="<?php echo $rfm['link'];?>">
                            <img src="<?php echo odin_get_image_url( $rfm['imagem'], 335, 311, get_the_title(), true ); ?>" alt="<?php echo strip_tags( $rfm['titulo'] );?>">

                            <figcaption class="info-about-image has-spacing1">
                                <h2 class="info-about-image__title fs-25 bp450:fs-30 bp576:fs-20 bp1200:fs-40">
                                    <a class="color-snow" href="<?php echo $rfm['link'];?>">
                                        <?php echo $rfm['titulo'];?>
                                    </a>
                                </h2>

                                <a class="btn has-style5 is-round" href="<?php echo $rf['link'];?>">
                                    <?php echo $rf['texto_do_botao'];?>
                                </a>
                            </figcaption>
                        </a>
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>