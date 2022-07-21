<?php
/**
 * Block Name: Mod 5 - Section Hub
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="sec-avisos-importantes">
    <div class="container">
        <div class="row">
            <div class="col-avisos-importantes">
                <h2 class="tt__avisos__importantes fw-bold color-snow txt-center">
                    <?php the_field('titulo');?>
                </h2>

                <div class="txt__avisos__importantes color-snow txt-center mrg-b-0">
                    <?php the_field('block-texto');?>
                </div>
            </div>
        </div>
    </div>
</section>