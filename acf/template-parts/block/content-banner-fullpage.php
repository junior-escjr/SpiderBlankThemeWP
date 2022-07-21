<?php
/**
 * Block Name: Banner Fullpage
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$bannerDesktop = get_field('banner_desktop');
$bannerMobile = get_field('banner_mobile');
$bannerLink = get_field('link_do_banner');
$linkExterno = ( get_field('link_externo') ) ? 'target="_blank"' : '';
?>

<section class="banner-fullpage">
    <figure>
        <a <?php echo $linkExterno;?> href="<?php echo $bannerLink;?>">
            <picture>
                <source media="( min-width:768px )" srcset="<?php echo $bannerDesktop;?>">
                <img src="<?php echo $bannerMobile;?>" alt="">
            </picture>
        </a>
    </figure>
</section>