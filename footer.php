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

	<footer class="site-footer container-fluid">
		<div class="row">
            <div class="col-xs-12 col-sm-12">
                <?php
                    printf('%s %s-%s -- %s',
                        '&copy;',
                        Date('Y'),
                        get_bloginfo('name'),
                        get_bloginfo('description')
                    );
                ?>
            </div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
