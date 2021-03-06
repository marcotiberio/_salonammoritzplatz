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
				<div id="booking-<?php the_ID(); ?>" style="cursor: pointer; font-style: italic; margin-bottom: 1rem;"><?php the_field('booking'); ?></div>
				<?php 
				$link = get_field('referrer');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
			<div class="right">
				<div class="details"><?php the_field('description'); ?></div>
				<?php 
				$additional_image = get_field('additional_image');
				if( !empty( $additional_image ) ): ?>
					<img src="<?php echo esc_url($additional_image['url']); ?>" alt="<?php echo esc_attr($additional_image['alt']); ?>" />
				<?php endif; ?>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
