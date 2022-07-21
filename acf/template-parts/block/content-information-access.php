<?php
/**
 * Block Name: Information Access
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$rowPrincipal = get_field('transportes-repeater');
$infoTransport = [];
$count = 0;
?>

<?php if( $rowPrincipal ) : ?>
    <section class="information-access">
        <div class="container">
            <h2 class="information-access__title"><?php the_field('titulo');?></h2>

            <div class="nav-tabs">
                <?php foreach( $rowPrincipal as $key => $rp ) :?>
                    <a class="nav-tabs__item<?php echo ( $_GET['transporte'] == $rp['icone_do_transporte'] ) ? ' active' : '';?>" href="?transporte=<?php echo $rp['icone_do_transporte'];?>">

                        <div class="nav-tabs__item__box">
                            <span class="icons icon-icon-<?php echo $rp['icone_do_transporte'];?>"></span>

                            <div class="nav-tabs__item__title"><?php echo $rp['nome_do_transporte'];?></div>
                        </div>
                        
                    </a>

                    <?php
                    $rowSecondary = $rp['informacoes_do_transporte'];

                    foreach ( $rowSecondary as $key2 => $rs ) :
                        $infoTransport[$key][$key2] = $rs;
                        $infoTransport[$key]['transporte'] = $rp['icone_do_transporte'];
                    endforeach;
                    ?>

                <?php endforeach; ?>
            </div>

            <div class="tab-content">
                <?php
                foreach( $infoTransport as $it ) :
                    $activeFirst = ( ( !isset( $_GET['transporte'] ) ) && ( $count === 0 ) ) ? ' active' : '';?>
                    
                    <div class="tab-content__info<?php echo $activeFirst;?><?php echo ( $_GET['transporte'] == $it['transporte'] ) ? ' active' : '';?>">
                        <?php for($i = 0; $i < count($it) - 1; $i++ ) :?>
                            <h3 class="tab-content__info__title"><?php echo $it[$i]['via'];?></h3>
                            <?php echo $it[$i]['informacao_da_via'];?>
                        <?php endfor; ?>
                    </div>
                <?php $count++; endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>