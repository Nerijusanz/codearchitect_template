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
 */

//make check if codearchitect plugin is activated; if not stop load theme;
if ( !class_exists( 'CA_Inc\\Init' ) )  //make check if theme can see init file
    die(__('theme plugin isn`t activated. Please activate plugin','codearchitect'));

get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php

					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'views/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'views/content', 'none' );

					endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
