<?php

if(!defined('ABSPATH')) { die('Área Proibida!');}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

function changeMapAgency() {
	global $wpdb;


	die();
}

add_action('wp_ajax_changeMapAgency', 'changeMapAgency');
add_action('wp_ajax_nopriv_changeMapAgency', 'changeMapAgency');