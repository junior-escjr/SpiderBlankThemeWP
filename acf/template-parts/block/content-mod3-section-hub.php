<?php
/**
 * Block Name: Mod 3 - Section Hub
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="bg-sec-nossa-historia pos-r">
    <div class="sec-nossa-historia">
        <div class="container">
            <div class="row">
                <div class="col-nossa-historia">
                    <h2 class="tt__nossa__historia color-snow"><?php the_field('block-titulo');?></h2>

                    <?php $repeaterDesc = get_field('block-repiter-descricao');
                    if( $repeaterDesc ) :
                        foreach( $repeaterDesc as $rD ) :?>
                            <p class="txt__nossa__historia color-snow">
                                <?php echo $rD['paragrafo']?>
                            </p>
                    <?php endforeach; endif;?>
                </div>
                
                <?php $groupImage = get_field('block-group-imagem');
                if( $groupImage ) : ?>
                    <div class="col-img-nossa-historia">
                        <picture>
                            <source media="(min-width:720px)" srcset="<?php echo $groupImage['imagem_desktop'];?>">
                            <img src="<?php echo $groupImage['imagem_mobile'];?>" alt="" class="img-nossa-historia">
                        </picture>
                    </div>
                <?php endif;?>

                <img class="nossa-historia-detail-center" src="<?php bloginfo('template_url');?>/static/images/bg-nossa-historia-center.png" alt="">
            </div>
        </div>
    </div>
</section>