<?php
/**
 * Block Name: Mod 1 - Section Hub
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="bg-sec-first-post<?php echo ( get_field('block_ocultar') ) ? ' hide' : '';?>">
    <div class="sec-first-post">
        <div class="container">
            <div class="row">
                <div class="col-first-post">
                    <h2 class="tt__first__post"><?php the_field('block_titulo');?></h2>

                    <p class="subtt__first__post"><?php the_field('block_descricao_curta');?></p>

                    <div class="txt__first__post"><?php the_field('descricao');?></div>
                </div>

                <div class="col-img-first-post">
                    <figure>
                        <img class="img-first-post center-block" src="<?php the_field('imagem');?>" alt="Bienal do Livro">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>