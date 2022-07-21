<?php
/**
 * Block Name: Hero Countdown
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<div class="hero hero__hub">
    <div class="container is__hero__hub">
        <div class="row">
            <div class="col-top-hub txt-center">
                <h2 class="tt__top__hub txt-upper fw-bold color-snow">
                    <?php the_field('block-titulo');?>
                </h2>

                <?php $btnGroup = get_field('block-botao-group'); ?>
                <a href="<?php echo $btnGroup['link']; ?>" class="link__expositor<?php echo ( $btnGroup['esconder'] ) ? ' hide' : '';?>"><?php echo esc_attr( $btnGroup['texto'] ); ?></a>
            </div>
            
            <?php $countdownGroup = get_field('block-contador-group'); ?>
            <div class="col-contador-hub<?php echo ( $countdownGroup['esconder'] ) ? ' hide' : '';?>">
                <div class="box__contador__hub">
                    <div class="box__tt__contador__hub">
                        <h2 class="tt__contador__hub txt-upper fw-bold"><?php echo $countdownGroup['texto1']; ?></h2>

                        <p class="st__contador__hub txt-upper ff-primary"><?php echo $countdownGroup['texto2']; ?></p>
                    </div>

                    <div class="contador__hub">
                        <div class="contador__algarismo contador__dias">
                            <h3 class="contador__numero fw-bold ff-primary">
                                000
                            </h3>

                            <p class="contador__texto ff-primary">
                                dias
                            </p>
                        </div>

                        <div class="contador__algarismo contador__horas">
                            <h3 class="contador__numero fw-bold ff-primary">
                                00
                            </h3>

                            <p class="contador__texto ff-primary">
                                horas
                            </p>
                        </div>

                        <div class="contador__algarismo contador__minutos">
                            <h3 class="contador__numero fw-bold ff-primary">
                                00
                            </h3>

                            <p class="contador__texto ff-primary">
                                minutos
                            </p>
                        </div>

                        <div class="contador__algarismo contador__segundos">
                            <h3 class="contador__numero fw-bold ff-primary">
                                00
                            </h3>

                            <p class="contador__texto ff-primary">
                                segundos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>