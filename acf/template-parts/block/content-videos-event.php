<?php
/**
 * Block Name: Feature Posts
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section class="videos-event">
    <div class="container">
        <div class="row">
            <?php
            $repeater = get_field('block_repeter_videos');

            if( $repeater ) : 
                foreach( $repeater as $r ) :?>
                    <div class="col-12 bp768:col-8 bp768:offset-2 mrg-b-22">
                        <div class="card">
                            <div class="card__image">
                                <div class="ratiohd">
                                    <?php $id = getYouTubeVideoIdFromUrl( $r['link_do_video'] ); ?>

                                    <iframe class="ratio_el" width="100%" src="https://www.youtube.com/embed/<?php echo $id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="card__body bg-snow has-spacing1 has_brd-black-alpha has__brd-radius-b">
                                <h2 class="card__title fs-20 bp450:fs-34 mrg-b-31 align-txt-card-video"><?php echo $r['titulo']?></h2>
                                <p class="desc-card-video center-block"><?php echo $r['descricao']?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            endif;?>

        </div>
    </div>
</section>