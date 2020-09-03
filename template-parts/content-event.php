<?php
/**
 * Template part for displaying event posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package salonammoritzplatz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php salonammoritzplatz_post_thumbnail(); ?>

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

	
</article><!-- #post-<?php the_ID(); ?> -->
