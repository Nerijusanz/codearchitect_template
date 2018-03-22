<?php
/**
 * @package codearchitect
 */

namespace CA\setup;


class Enqueue {

    public function __construct(){

        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );   //for front-end

    }

    public function enqueue(){


        if ( APP_ENV === 'development' ) :
            wp_enqueue_script('__bs_script__', WP_SITEURL . ':3000/browser-sync/browser-sync-client.js', array(), null, true);
        endif;

        wp_deregister_script( 'jquery' ); // Deregister the built-in version of jQuery from WordPress

        wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/codearchitect_theme_style.min.css', array(), '', 'all' );
        wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/codearchitect_theme_main.min.js', array(), '', true );

    }

} 