<?php 
	/* Template Name: Das Program */ 
?>

<?php get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">
			
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

		<?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 6,
			);
			$arr_posts = new WP_Query( $args );
			 
			if ( $arr_posts->have_posts() ) :
			 
				while ( $arr_posts->have_posts() ) :
					$arr_posts->the_post();
					?>
					<article class="latestpost--custom" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="event-cover">
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail( 'full' );
                            endif;
                            ?>
						</div>
						<div class="event-header">
							<p><?php get_field ('type'); ?></p>
							<h2><?php get_field ('title'); ?></h2>
						</div>
						<div class="event-info">
							<div class="left">
								<p><?php get_field ('when'); ?></p>
								<p><?php get_field ('price'); ?></p>
								<p id="booking"><?php get_field ('booking'); ?></p>
								<p><?php get_field ('referrer'); ?></p>
							</div>
							<div class="right">
								<div class="details"><?php get_field ('description'); ?></div>
							</div>
						</div>
					</article>
					<?php
				endwhile;
			endif; ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();