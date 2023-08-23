<?php  
// funcion pra generar menu y su array
function tema_personalizado_one_menu(){
    register_nav_menus( array(
        'menu-principal' => __( 'Menu Principal', 'tema-personalizado-one' )
    ));
}

add_action( 'init', 'tema_personalizado_one_menu' );


//funcion para generar el final class functions extends AnotherClass implements Interface

function tema_personalizado_one_scripts_styles(){

    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' , array() , '8.0.1');

    wp_enqueue_style( 'style', get_stylesheet_uri('style', get_stylesheet_uri(), array('normalize') , '1.0.0') );
}

add_action( 'wp_enqueue_scripts', 'tema_personalizado_one_scripts_styles' );


