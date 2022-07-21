<?php
/**
 * Block Name: Novidades Evento
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="columnist is-novidades">
    <img class="v1" src="<?php bloginfo('template_url');?>/static/images/vwhole.png" alt="">
    <img class="v2" src="<?php bloginfo('template_url');?>/static/images/vmid.png" alt="">          

    <div class="container">
        <div class="row">
            <div class="col-12 bp768:col-5">
                <h2 class="sec-title mrg-b-22 lh-1 color-snow"><?php the_field('block-titulo');?></h2>

                <p class="sec-desc color-snow"><?php the_field('block-descricao');?></p>
            </div>
        </div>

        <div class="separator has-style3"></div>

        <div class="row mrg-b-43">
            <?php for( $i = 0; $i < 4; $i++ ) :?>
            <article class="col-12 bp660:col-6 bp880:col-3">
                <div class="card is_media-for-card">
                    <div class="card__image mrg-b-25">
                        <figure class="pos-r">
                            <a href="javascript:;">
                                <img class="wp-image-thumb img-responsive " src="<?php bloginfo('url');?>/wp-content/uploads/2021/03/Foto_1_Anya_Taylor-Joy-400x263.jpg" alt="O livro vai ao cinema">
                            </a>
                        </figure>
                    </div>
                    <div class="card__body">
                        <div class="info-about-image__group">
                            <div class="holder-tags">
                                <a href="javascript:;" class="tags color-snow">
                                    <span class="tags__circle-color is-colunistas"></span>Wilson Gomes
                                </a>
                            </div>
                            <div class="icon-type-post">
                                <span class="icon-doc-regular"></span>
                            </div>
                        </div>
            
                        <h3 class="card__title">
                            <a class="color-snow" href="javascript:;">O prazer de ouvir: podcasts invadem a literatura</a>
                        </h3>
                    </div>
                </div>
            </article>
            <?php endfor; ?>
        </div>
        
        <div class="txt-center">
            <a href="javascript:;" class="btn has-style3">Saiba Mais</a>
        </div>
    </div>
</section>