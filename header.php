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

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-md-3">

                    <div class="logo">
                        <a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/codearchitect-logo.png';?>"/></a>
                    </div>

                </div>

                <div class="main-navigation-menu-toggle"></div>

                <div class="col-xs-12 col-md-6">

                    <div class="main-navigation">

                        <div class="main-navigation-top">

                            <ul class="main-navigation-top-menu">
                                <li>
                                    <?php  get_template_part( 'views/language-menu');?>
                                </li>
                                <li><div class="main-navigation-menu-toggle-close"></div></li>

                            </ul>

                        </div><!--.main-navigation-top-->

                        <div class="main-navigation-content"><?php CA_Inc\site_core\menu\MenuInit::wp_bootstrap_nav_walker();?></div>

                        <div class="main-navigation-footer">

                            <div class="main-navigation-logo">
                                <a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/codearchitect-logo.png';?>"/></a>
                            </div>

                        </div><!--.main-navigation-footer-->

                    </div><!--.main-navigation-->

                </div><!--.col-->

                <div class="col-xs-12 col-md-3">

                    <div class="top-menu">

                        <ul>
                            <li>
                                <?php  get_template_part( 'views/language-menu');?>
                            </li>
                        </ul>

                    </div><!--.top-menu-->

                </div><!--.col-->

            </div><!--.row-->

        </div><!--.container-->

    </header><!--.site-header -->

    <div id="content" class="site-content">