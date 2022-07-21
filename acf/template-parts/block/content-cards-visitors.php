<?php
/**
 * Block Name: Branded Content
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$rowPrincipal = get_field('card_informativo-repeater');
?>

<?php if( $rowPrincipal ) : ?>
<div class="visitors-card row">

    <?php foreach( $rowPrincipal as $rp ) : ?>
        <div class="col-12 bp768:col-6 mrg-b-31">
            <div class="visitors-card__holder">
                <img src="<?php echo $rp['icone'];?>" alt="">

                <?php
                $rowSecondary = $rp['informacoes'];

                if( $rowSecondary ) :
                foreach( $rowSecondary as $rs ) :?>
                    <div class="visitors-card__body">
                        <h2 class="visitors-card__title"><?php echo $rs['titulo'];?></h2>

                        <div class="visitors-card__txt">
                            <?php echo $rs['texto'];?>
                        </div>
                    </div>
                <?php endforeach; endif; ?>

                <div class="visitors-card__footer">
                    <a class="btn has-style4 is-round" href="<?php echo $rp['link_do_botao'];?>">
                        <?php echo $rp['texto_do_botao']?>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?php endif; ?>