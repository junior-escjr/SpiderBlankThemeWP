<?php

if(!defined('ABSPATH')) { die('Área Proibida!');}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

function changeMapAgency() {
	global $wpdb;

	$id = $_POST['agency'];
	$args2 = new WP_query(
		array(
			'post_type'	=>	'agencias',
		    'p' => $id,
		)
	);
	
	if ($args2->have_posts()): while ($args2->have_posts()) : $args2->the_post(); 
		echo get_field('url_do_mapa');
	endwhile;
	
	else :
		echo 'Dúvida não econtrada!';
	endif;

	die();
}

add_action('wp_ajax_changeMapAgency', 'changeMapAgency');
add_action('wp_ajax_nopriv_changeMapAgency', 'changeMapAgency');




function getRegion() {
	global $wpdb;

	$id_region = $_POST['region'];

	$cats_child = get_terms(
    array(
        'taxonomy' => 'agencias-category',
        'child_of' => $id_region,
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => '0'
    ) );

    foreach( $cats_child as $cc ) : ?>
		<option value="<?php echo $cc->term_id;?>"><?php echo $cc->name;?></option>
	<?php endforeach;

	die();
}

add_action('wp_ajax_getRegion', 'getRegion');
add_action('wp_ajax_nopriv_getRegion', 'getRegion');




function displayAgency() {
	global $wpdb;

	if( isset( $_POST['cidade'] ) ) :
		$id = $_POST['cidade'];
	else :
		$id = $_POST['regiao'];
	endif;


	$query = new Wp_Query(
		array(
			'post_type'		=> 'agencias',
			'posts_per_page'	=> -1,
			'order'				=>	'ASC',
			'tax_query' => array(
            	array(
            		'taxonomy'  => 'agencias-category',
			        'field'     => 'term_id',
			        'terms'     => array( $id )
           		)
            )
		)
	);

	if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>
		<div class="col-12 col-bp576-6 col-bp768-4 col-bp992-3 mrg-b-20">
			<div class="box-ponto-venda" data-agency="<?php the_ID(); ?>">
				<div class="title">Agência <span class="fw-semibold"><?php the_title(); ?></span></div>
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif;


	die();
}

add_action('wp_ajax_displayAgency', 'displayAgency');
add_action('wp_ajax_nopriv_displayAgency', 'displayAgency');