<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearchitect
 */
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php bloginfo('description');?>">
	<meta name="author" content="">
	<title><?php bloginfo('name'); wp_title();?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if(is_singular() && pings_open(get_queried_object()) ):?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>">
	<?php endif;?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

    if(CA_Inc\modules\settings\SettingsSetup::make_check_site_shutdown_status() == true){   //turn off site;

        get_template_part( 'views/content', 'site-shutdown' );
        exit;
    }

?>

	<div id="page" class="site">

		<header class="site-header" role="banner">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="main-navigation">
                        <?php CA_Inc\site_core\menu\MenuInit::wp_bootstrap_nav_walker();?>
                    </div><!--.main-navigation-->
                </div>
            </nav>

	    </header><!-- #masthead -->

	    <div id="content" class="site-content">