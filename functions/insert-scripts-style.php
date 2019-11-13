<?php
/*--------------------------------------------------------------
	CARREGANDO ESTILOS E SCRIPTS
--------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'spider_enqueue_scripts');
function spider_enqueue_scripts() {

	// CARREGA FONTE DO GOOGLE
	// wp_register_style('btwp-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900');
	// wp_enqueue_style( 'btwp-googleFonts');

	// CSSs
	// wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('all', get_stylesheet_directory_uri() . '/static/css/all.min.css');
}


add_action('wp_footer', 'spider_load_scripts');
function spider_load_scripts() {

	// CARREGA JQUERY NATIVO
	wp_enqueue_script('jquery', true);
	
	// CARREGA SCRIPTS
	// wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/static/js/scripts.js');
	// wp_localize_script( 'scripts', 'ajax', array(
	// 	'ajax_url' => admin_url( 'admin-ajax.php' )
	// ));
}