<?php
/**
 * Template Name: Event
 * Template Post Type: post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package salonammoritzplatz
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-event', get_post_type() );


		endwhile; // End of the loop.
		?>

<div class="entry-content">

<div class="event-header">
	<p><?php the_field('type'); ?></p>
	<h2><?php the_field('title'); ?></h2>
</div>
<div class="event-info">
	<div class="left">
		<p><?php the_field('when'); ?></p>
		<p><?php the_field('price'); ?></p>
		<p id="booking"><?php the_field('booking'); ?></p>
		<p><?php the_field('referrer'); ?></p>
	</div>
	<div class="right">
		<div class="details"><?php the_field('description'); ?></div>
	</div>
</div>

</div><!-- .entry-content -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
