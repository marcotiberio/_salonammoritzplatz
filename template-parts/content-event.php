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
			<p><?php echo $type; ?></p>
			<h2><?php echo $title; ?></h2>
		</div>
		<div class="event-info">
			<div class="left">
				<p><?php echo $when; ?></p>
				<p><?php echo $price; ?></p>
				<p id="booking"><?php echo $booking; ?></p>
				<p><?php echo $referrer; ?></p>
			</div>
			<div class="right">
				<div class="details"><?php echo $description; ?></div>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
