<?php
/**
 * Block Name: FAQ
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$rowPrincipal = get_field('faq-repeater');
?>

<?php if( $rowPrincipal ) :?>
<section class="faq">
    <?php foreach( $rowPrincipal as $rp ) :?>
        <h2 class="faq__title"><?php echo $rp['titulo']; ?></h2>
        <div class="accordion">

            <?php foreach( $rp['perguntas_e_respostas'] as $pr  ) : ?>
                <div class="item">
                    <div class="accordion__header"><?php echo $pr['pergunta']?></div>
                    <div class="accordion__text">
                        <?php echo $pr['resposta']?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>