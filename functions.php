<?php
/*
 *  Author: Junior
 *  URL: https://github.com/juniorbdb/
 */

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

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
