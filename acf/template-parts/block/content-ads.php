<?php
/**
 * Block Name: Branded Content
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="ads">
    <img class="ads__v1" src="<?php bloginfo('template_url');?>/static/images/vector-ads1.png" alt="">

    <?php if ( is_active_sidebar('anuncio-1') ) :?>
        <div class="container">
            <ul class="anuncio1">
                <?php dinamic_sidebar_randon('anuncio-1'); ?>
            </ul>
        </div>
    <?php endif; ?>
</section>