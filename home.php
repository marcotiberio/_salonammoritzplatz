<?php
/**
 * Template Name: Home
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package salonammoritzplatz
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="cover-image">
			<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/background-home-scaled.jpg" alt="">
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
