<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package salonammoritzplatz
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'Footer',
				)
			);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
