<?php
/**
 * Block Name: Espaço Oficinas
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="sec-espaco-oficinas">
    <div class="container">
        <div class="row">
            <div class="col-info-oficinas">
                <h2 class="title-oficinas">
                    <?php the_field('block-titulo');?>
                </h2>

                <div class="text-oficinas">
                    <?php the_field('block-texto');?>
                </div>
            </div>

            <div class="col-img-oficinas">
                <div class="galeria-oficinas">
                    <div class="galeria-oficinas__principal">
                        <figure class="galeria-oficinas__cover">
                            <img src="<?php the_field('block-imagem-principal');?>" alt="" class="galeria-oficinas__img">
                        </figure>
                    </div>
                    <div class="galeria-oficinas__secundaria is-left">
                        <figure class="galeria-oficinas__cover">
                            <img src="<?php the_field('block-imagem-secundaria1');?>" alt="" class="galeria-oficinas__img">
                        </figure>
                    </div>
                    <div class="galeria-oficinas__secundaria is-right">
                        <figure class="galeria-oficinas__cover">
                            <img src="<?php the_field('block-imagem-secundaria2');?>" alt="" class="galeria-oficinas__img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>