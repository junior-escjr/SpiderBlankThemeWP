<?php
/**
 * Block Name: Display Content Page
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$idPage = get_field('id_da_pagina');
?>

<?php
    $query = new WP_Query(
        array(
            'page_id'	=>	$idPage,
        )
    );

    if ( $query->have_posts() ): while ( $query->have_posts() ) : $query->the_post();
        the_content();
    endwhile; endif; wp_reset_postdata();
?>