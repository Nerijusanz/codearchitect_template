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

                <?php
                $footer_txt=sprintf('%s %s-%s -- %s',
                    '&copy;',
                    Date('Y'),
                    get_bloginfo('name'),
                    __(get_bloginfo('description'),'codearchitect')
                );?>

                <p><?php echo $footer_txt; ?></p>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
