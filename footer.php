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

	</div><!-- #content .site-content -->

	<footer class="site-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <?php
                printf('%s %s-%s -- %s',
                    '&copy;',
                    Date('Y'),
                    get_bloginfo('name'),
                    __(get_bloginfo('description'),'codearchitect')
                );
                ?>
            </div>
        </div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
