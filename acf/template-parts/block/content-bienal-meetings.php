<?php
/**
 * Block Name: Branded Content
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<section class="general-post">
    <img class="general-post__v1" src="<?php bloginfo('template_url');?>/static/images/vector-bienal-meetings1.png" alt="">
    <img class="general-post__v2" src="<?php bloginfo('template_url');?>/static/images/vector-bienal-meetings2.png" alt="">

    <div class="container">
        <div class="row flex_bottom">
            <div class="col-12 bp768:col-5">
                <h2 class="sec-title mrg-b-22 lh-1"><?php the_field('block-titulo');?></h2>

                <div class="sec-desc"><?php the_field('block-descricao');?></div>
            </div>
            <div class="col-12 bp768:col-7">
                <div class="tabs-container has-style4">
                    <a class="tabs-container__btn" href="javascript:;">Selecione o assunto</a>

                    <?php $tabs = array('cafe-digital', 'festival-conexoes', 'evento-2019');
                    $indTab = rand(0, 2);?>

                    <div class="tabs-container__nav">
                        <a data-class-result="tab-content-meetings" data-cat="<?php echo $tabs[0];?>" class="tabs-container__item<?php echo ($tabs[$indTab] == 'cafe-digital') ? ' is-active' : '';?>" href="javascript:;">Café Digital</a>
                        <a data-class-result="tab-content-meetings" data-cat="<?php echo $tabs[1];?>" class="tabs-container__item<?php echo ($tabs[$indTab] == 'festival-conexoes') ? ' is-active' : '';?>" href="javascript:;">Festival Conexões</a>
                        <a data-class-result="tab-content-meetings" data-cat="<?php echo $tabs[2];?>" class="tabs-container__item<?php echo ($tabs[$indTab] == 'evento-2019') ? ' is-active' : '';?>" href="javascript:;">Evento 2019</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator has-style4"></div>

        <div class="row-cf tab-content-meetings">
            <?php
            $count = 1;
            $query = new WP_Query(
				array(
					'posts_per_page' 	=> 	5,
					'tag'               =>  $tabs[$indTab],
                    'orderby'           => 'rand'
				)
            );
            
            if ( $query->have_posts() ): while ( $query->have_posts() ) : $query->the_post();
            
                if( $count == 1 ) : ?>
                    <div class="col-general-post__feature">
                        <figure class="general-post__primary pos-r">
                            <a class="filter-thumb" href="<?php the_permalink();?>">
                                <picture>
                                    <source media="(min-width:430px)" srcset="<?php echo odin_get_image_url( get_post_thumbnail_id(), 609, 676); ?>">
                                    <img src="<?php echo odin_get_image_url( get_post_thumbnail_id(), 399, 373); ?>" alt="">
                                </picture>

                                <figcaption class="info-about-image has-spacing3">
                                    <div class="group-tags-icon">
                                        <?php get_category_current( '', 'color-snow' );?>
                                        <?php echo add_icon_format( $query->post->ID );?>
                                    </div>

                                    <h2 class="info-about-image__title fs-25 bp576:fs-32 bp880:fs-36">
                                        <a class="color-snow" href="<?php the_permalink();?>">
                                            <?php the_title();?>
                                        </a>
                                    </h2>

                                    <!-- <p class="info-about-image__date data-extras fw-bold color-snow bp576:fs-12">
                                        <?php //the_time('j F, Y'); ?>
                                    </p> -->
                                </figcaption>
                            </a>
                        </figure>
                    </div>

                <?php elseif( $count > 1 && $count < 4 ) : ?>
                    <div class="col-general-post__secondary general-post__secondary">
                        <div class="card pos-r">

                            <?php if ( has_post_thumbnail()) : ?>
                                <div class="card-image__col">
                                    <div class="card__image pos-r">
                                        <figure class="mrg-b-14">
                                            <a href="<?php the_permalink();?>">
                                                <?php echo odin_thumbnail( 430, 293, get_the_title(),true); ?>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="card-body__col">
                                <div class="card__body">
                                    <div class="group-tags-icon">
                                        <?php get_category_current();?>
                                        <?php echo add_icon_format( $query->post->ID, ' is-style1' );?>
                                    </div>

                                    <h3 class="card__title fs-16 bp500:fs-20 bp880:fs-16 bp1052:fs-20 mrg-b-14">
                                        <a href="<?php the_permalink();?>">
                                            <?php the_title();?>
                                        </a>
                                    </h3>

                                   <?php
                                    if( get_field('mediador', $query->post->ID) || get_field('convidados', $query->post->ID) ) : ?>
                                        <p class="card-general-post__txt fs-12 fw-bold color-green-100 mrg-b-0">
                                            <?php echo get_field('mediador', $query->post->ID);?>, <?php echo get_field('convidados', $query->post->ID);?>
                                        </p>
                                    <?php endif;?>
                                </div>
                            </div>	
                        </div>
                    </div>
                
                <?php else : ?>
                    <div class="col-general-post__tertiary general-post__secondary">
                        <div class="card">
                            <?php if ( has_post_thumbnail()) : ?>
                                <div class="card-image__col">
                                    <div class="card__image pos-r">
                                        <figure class="mrg-b-14">
                                            <a href="<?php the_permalink();?>">
                                                <?php echo odin_thumbnail( 430, 293, get_the_title(),true); ?>
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="card-body__col">
                                <div class="card__body">
                                    <div class="group-tags-icon">
                                        <?php get_category_current();?>
                                        <?php echo add_icon_format( $query->post->ID, ' is-style1' );?>
                                    </div>

                                    <h3 class="card__title card__title fs-16 bp500:fs-20 bp880:fs-16 bp1052:fs-20 mrg-b-14">
                                        <a href="<?php the_permalink();?>">
                                            <?php the_title();?>
                                        </a>
                                    </h3>

                                    <?php
                                    if( get_field('mediador', $query->post->ID) || get_field('convidados', $query->post->ID) ) : ?>
                                        <p class="card-general-post__txt fs-12 fw-bold color-green-100 mrg-b-0">
                                            <?php echo get_field('mediador', $query->post->ID);?>, <?php echo get_field('convidados', $query->post->ID);?>
                                        </p>
                                    <?php endif;?>
                                </div>
                            </div>	
                        </div>
                    </div>
                <?php endif; ?>
            <?php $count++; endwhile; endif; wp_reset_postdata(); ?>

        </div>

        <div class="separator is-meeting has-style4 mrg-t-56"></div>

        <!-- <h3 class="outher-contents__title">Outras postagens</h3> -->

        <div class="row outher-posts-meetings mrg-b-56">
        <?php
            $query2 = new WP_Query(
				array(
					'posts_per_page' 	=> 	4,
					'tag'               =>  $tabs[$indTab],
                    'orderby'           => 'rand'
				)
            );
            
            if ( $query2->have_posts() ): while ( $query2->have_posts() ) : $query2->the_post();?>
                <article class="col-12 bp660:col-6 bp880:col-3">
                    <div class="card is_media-for-card">
                        <div class="card__image mrg-b-25">
                            <figure class="pos-r">
                                <a href="<?php the_permalink();?>">
                                    <?php echo odin_thumbnail( 400, 263, get_the_title(),true); ?>
                                </a>
                            </figure>
                        </div>
                        <div class="card__body">
                            <div class="group-tags-icon">
                                <?php get_category_current();?>
                                <?php echo add_icon_format( $query2->post->ID, ' is-style1' );?>
                            </div>
                
                            <h3 class="card__title mrg-b-14">
                                <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h3>

                            <?php
                            if( get_field('mediador', $query2->post->ID) || get_field('convidados', $query2->post->ID) ) : ?>
                                <p class="card-general-post__txt fs-12 fw-bold color-green-100 mrg-b-0">
                                    <?php echo get_field('mediador', $query2->post->ID);?>, <?php echo get_field('convidados', $query2->post->ID);?>
                                </p>
                            <?php endif;?>
                        </div>
                    </div>
                </article>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>

        <div class="txt-center mrg-t-31">
            <a class="btn has-style3 is-green see-more-meeting" href="<?php bloginfo('url');?>/tag/<?php echo $tabs[$indTab];?>/">VEJA MAIS SOBRE</a>
        </div>
    </div>
</section>