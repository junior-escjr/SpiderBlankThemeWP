<?php
/**
 * Block Name: Attraction
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$count = 1;
$repeaterAttraction = get_field('block-repeater-atracoes');
?>

<section class="attraction">
    <div class="container">
        <div class="row">
            <div class="col-12 bp768:col-5">
                <h2 class="sec-title mrg-b-22 lh-1"><?php the_field('block-titulo');?></h2>

                <div class="sec-desc"><?php the_field('block-descricao');?></div>
            </div>
            <div class="col-12 bp768:col-5 bp768:offset-2">
                <div class="attraction__align-search">
                    <input class="filterTextBox input has-style5 is-search" type="text" placeholder="Pesquisar">
                </div>
            </div>
        </div>

        <div class="separator has-style4"></div>

        <div class="row-grid">
            <?php if( $repeaterAttraction ) : 
                foreach( $repeaterAttraction as $key => $a ) :?>
                    <div class="item<?php echo ( $a['destaque'] ) ? ' star' : '';?>">
                        <figure>
                            <a href="javascript:;" data-remodal-target="modal<?php echo $key;?>">
                                <img src="<?php echo $a['foto']['url'];?>" alt="<?php echo $a['nome_do_participante']?>">
                            </a>
                        </figure>
                        <div class="name" style="display: none;">
                        <?php echo $a['nome_do_participante']?>
                    </div>
                        
                        <div class="remodal" data-remodal-id="modal<?php echo $key;?>" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
                            <button data-remodal-action="close" class="remodal-close"></button>
                            
                            <div class="remodal__holder-infos">
                                <div class="remodal__avatar">
                                    <figure class="remodal__avatar__holder">
                                        <img class="center-block" src="<?php echo odin_get_image_url($a['foto']['ID'], 151, 151);?>" alt="">

                                        <img class="remodal__avatar__mask" src="<?php bloginfo('template_url');?>/static/images/mask-modal-attraction2.png" alt="">
                                    </figure>
                                    <h4 class="remodal__avatar__name"><?php echo $a['nome_do_participante'];?></h4>
                                    <h5 class="remodal__avatar__profession"><?php echo $a['profissao'];?></h5>
                                </div>
                                <div class="remodal__info">
                                    <div class="remodal__info__title">Info</div>
                                    <p class="remodal__info__desc"><?php echo $a['info']?></p>

                                    <div class="remodal__info__title">Programação</div>
                                    <p class="remodal__info__desc mrg-b-0"><?php echo $a['programacao']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>