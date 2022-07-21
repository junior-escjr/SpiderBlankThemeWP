<?php
/**
 * Block Name: Mod 2 - Section Hub
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="sec-sobre-evento">
    <div class="container">
        <div class="row">
            <div class="col-sobre-evento">
                <h2 class="tt__sobre__evento"><?php the_field('block_titulo');?></h2>

                <?php
                $repeater = get_field('block_repiter_assuntos');
                if( $repeater ) : ?>
                    
                    <div class="holder__assunto">
                        <?php foreach( $repeater as $r ) :?>
                            <p class="assunto__evento">
                                <?php echo $r['tema_do_assunto']?>
                            </p>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>

                <div class="txt__sobre__evento has-bar-top">
                    <?php the_field('block_descricao');?>
                </div>
            </div>
            
            <?php $groupImage = get_field('block-group-imagem');
            if( $groupImage ) : ?>
                <div class="col-img-sobre-evento">
                    <picture>
                        <source media="(min-width:720px)" srcset="<?php echo $groupImage['imagem_desktop'];?>">
                        <img src="<?php echo $groupImage['imagem_mobile'];?>" alt="">
                    </picture>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>