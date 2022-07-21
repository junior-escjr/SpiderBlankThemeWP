<?php
/**
 * Block Name: Mod 4 - Section Hub
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="sec-local-evento">
    <div class="container">
        <div class="row">
            <div class="col-local-evento fs-0">
                <h2 class="tt__local__evento">
                    <?php the_field('block-titulo');?>
                </h2>

                <p class="txt__local__evento txt__event has-limiter">
                    <?php the_field('block-descricao');?>
                </p>

                <div class="box__info__holders">
                    <?php $groupContact = get_field('block_bloco_contato');
                    if( $groupContact ) :?>
                        <div class="box__informacoes__faq">
                            <div class="holder__infos">
                                <h3 class="tt__infos__sac fw-bold">
                                    <?php echo $groupContact['titulo']?>
                                </h3>

                                <p class="txt__infos__sac">
                                    <a href="mailto:<?php echo $groupContact['email'];?>" class="link__infos__sac"><?php echo $groupContact['email'];?></a> <br>
                                    <?php echo $groupContact['texto_html'];?>
                                </p>
                            </div>
                        </div>
                    <?php endif;?>
                    
                    <?php $groupAddress = get_field('block_bloco_endereco');
                    if( $groupAddress ) :?>
                        <a href="<?php echo $groupAddress['link_mapa']?>" target="_blank" class="box__endereco">
                            <h3 class="tt__endereco fw-bold">
                                <?php echo $groupAddress['titulo']?>
                            </h3>

                            <h4 class="st__endereco fw-bold">
                                <?php echo $groupAddress['nome_do_local']?>
                            </h4>

                            <p class="txt__endereco">
                                <?php echo $groupAddress['endereco']?>
                            </p>
                        </a>
                    <?php endif;?>
                </div>

            </div>

            <div class="col-mapa-local">
                <iframe src="<?php the_field('block-mapa');?>" width="100%" frameborder="0" style="border:0" class="mapa-local"></iframe>
            </div>
        </div>
    </div>
</section>