<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package codearchitect
 *
 * Template Name: Front Page
 */


//make check if codearchitect plugin is activated; if not stop load theme;
if ( !class_exists( 'CA_Inc\\Init' ) )  //make check if theme can see init file
    die(__('theme plugin isn`t activated. Please activate plugin','codearchitect'));

get_header(); ?>

<div class="container front-page">

	<div class="row">

		<div class="col-sm-12">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

                    <h1>FRONT-PAGE</h1>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->


	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
