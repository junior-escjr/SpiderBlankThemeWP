<?php
/**
 * Block Name: Hero Blue
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<div class="hero is-blue">
    <div class="container">
        <h1 class="hero__title ff-khand"><?php the_field('block-titulo');?></h1>
        <div class="holder-category-description color-snow txt-center">
            <?php the_field('block-descricao');?>
        </div>
    </div>
</div>