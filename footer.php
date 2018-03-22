<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codearchitect
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<div class="site-info">

            <?php
            if ( has_nav_menu( 'footer' ) ) :
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_id' => 'ca-footer-menu',
                    //'walker' => new CA\Core\WalkerNav(),
                ) );
            endif;
            ?>

			<a href="<?php
				/* translators: %s: Github repo URL. */
				echo esc_url( __( 'https://codearchitect.lt', 'codearchitect' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'codearchitect' ), 'codearchitect' ); ?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: %1: Theme name. */

				/* translators: %2: Author name. */
				printf( esc_html__( 'Theme: %1$s by %2$s %3$s', 'codearchitect' ),
										'codearchitect',
										'<a href="http://codearchitect.lt/" rel="designer">Codearchitect</a>' ,
										Date('Y')
							);
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
