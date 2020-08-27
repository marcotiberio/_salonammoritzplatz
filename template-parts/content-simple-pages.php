<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package salonammoritzplatz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="inside">
			<?php 
			$banner_title = get_field('banner_title');
			if( !empty( $banner_title ) ): ?>
				<img class="first" src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
				<img src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
				<img src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
				<img src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
				<img src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
				<!-- repeated images below to keep up with animation -->
				<img src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
				<img src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
				<img src="<?php echo esc_url($banner_title['url']); ?>" alt="<?php echo esc_attr($banner_title['alt']); ?>" />
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<?php salonammoritzplatz_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'salonammoritzplatz' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'salonammoritzplatz' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php salonammoritzplatz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
