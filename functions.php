<?php
/*
 *  Author: Junior
 *  URL: https://github.com/juniorbdb/
 */

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

load_theme_textdomain( 'spiderblank', get_template_directory() . '/languages' );

// INSERIR SCRIPTS
include(TEMPLATEPATH . '/functions/insert-scripts-style.php');

// REGISTER MENU
include(TEMPLATEPATH . '/functions/register-nav-menu.php');

// TEMPLATE COMENTÁRIO
include(TEMPLATEPATH . '/functions/insert-mytheme-comment.php');

// REMOVE LIXO DO HEAD
include(TEMPLATEPATH . '/functions/remove-junk-header.php');

// FUNÇÃO DA PÁGINAÇÃO
include(TEMPLATEPATH . '/functions/pagination.php');

// FUNÇÃO DA PÁGINAÇÃO
include(TEMPLATEPATH . '/functions/functions-ajax.php');

// MENU DESCRIPTION
include(TEMPLATEPATH . '/functions/add-theme-suport.php');