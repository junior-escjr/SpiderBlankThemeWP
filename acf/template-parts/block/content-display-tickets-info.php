<?php
/**
 * Block Name: Tickets Info
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$rowTickests = get_field('ingressos-repeater');
?>

<?php
if ( $rowTickests ) :?>
    <div class="tickets-info">
        <?php foreach( $rowTickests as $t ) : ?>
            <div class="item">
                <div class="tickets-info__title"><?php echo $t['titulo_do_ingresso'];?></div>

                <div class="tickets-info__body">
                    <div class="tickets-info__price"><span class="fw-bold">Inteira:</span> R$ <?php echo $t['valor_da_inteira'];?></div>
                    <div class="tickets-info__price"><span class="fw-bold">Meia-Entrada:</span> R$ <?php echo $t['valor_da_meia'];?></div>
                    <a target="_blank" class="btn has-style4 is-round" href="<?php echo $t['link_para_comprar'];?>"><?php echo $t['texto_do_botao'];?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
