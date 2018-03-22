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

		<header id="masthead" class="site-header" role="banner">

			<div class="container container-fluid">

				<div class="row">
					<div class="col-xs-12 col-sm-4">

						<div class="site-branding">

                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                                    $description = get_bloginfo( 'description', 'display' );
                                    if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php _e($description); /* WPCS: xss ok. */ ?></p>
                                <?php endif; ?>
					    </div><!-- .site-branding -->

				    </div><!-- .col -->

                    <div class="col-xs-12 col-sm-8">

                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php

                                CA_Inc\site_core\menu\MenuInit::wp_bootstrap_nav_walker();

                            ?>
                        </nav>

                    </div><!-- .col -->

			    </div><!-- .row -->
		    </div><!-- .container-fluid -->

	    </header><!-- #masthead -->

	    <div id="content" class="site-content">