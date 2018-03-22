<?php
/**
 * @package codearchitect
 */



//make check if codearchitect plugin is activated; if not stop load theme classes;
if (class_exists( 'CA_Inc\\Init' ) ):  //make check if theme can see plugin init file


    if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
        require_once dirname( __FILE__ ) . '/vendor/autoload.php';
    endif;


    if ( class_exists( 'CA\\Init' ) ) :
        CA\Init::register_services();
    endif;


endif;

