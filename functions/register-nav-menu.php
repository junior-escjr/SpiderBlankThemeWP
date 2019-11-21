<?php

// MENU PRINCIPAL
function spidertheme_nav(){
    //$walker = new Menu_With_Description;
    wp_nav_menu(
    array(
        'theme_location'  => 'menu-principal',
        'container'       => 'nav',
        'container_class' => 'menu-responsive -pos-right',
        'menu_class'      => 'cf dropdown menu scroll-menu',
        //'walker'          => $walker
        )
    );
}

register_nav_menu( 'menu-principal', 'Menu Principal' );