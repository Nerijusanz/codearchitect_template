<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package codearchitect
 */

get_header(); ?>

<div class="container">

	<div class="row">

		<div class="col-sm-12">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<h1><?php esc_html_e( 'That page can&rsquo;t be found.', 'codearchitect' ); ?></h1>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->


	</div><!-- .row -->

</div><!-- .container -->

<?php
get_footer();
