<?php
/**
 * Block Name: Branded Content
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="branded">
    <img class="v1" src="<?php bloginfo('template_url');?>/static/images/vwhole.png" alt="">
    <img class="v2" src="<?php bloginfo('template_url');?>/static/images/vmid.png" alt="">

    <div class="container">
        <div class="row">
            <div class="col-12 bp768:col-5">
                <h2 class="sec-title mrg-b-22 lh-1"><?php the_field('block-titulo');?></h2>

                <p class="sec-desc"><?php the_field('block-descricao');?></p>
            </div>
        </div>

        <div class="separator has-style4"></div>

        <div class="branded__main">
            <div class="row">
                <?php for( $i = 0; $i < 8; $i++ ) :?>
                <div class="branded__col">
                    <div class="card">
                        <figure class="mrg-b-14">
                            <a href="javascript:;"><img src="<?php bloginfo('template_url');?>/static/images/itau.jpg" alt=""></a> 
                        </figure>
                        <h2 class="card__title">
                            <a href="#">Amazônia – Terra de Quem?</a>
                        </h2>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>