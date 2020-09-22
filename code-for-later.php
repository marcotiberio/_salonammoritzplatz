<!-- Tab content -->
<div id="2020" class="tabcontent" style="display: grid;">
    <?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'category_name' => '2020',
				'posts_per_page' => 6,
			);
			$arr_posts = new WP_Query( $args );
			 
			if ( $arr_posts->have_posts() ) :
				
			 
				while ( $arr_posts->have_posts() ) :
					$arr_posts->the_post();
					?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>
    <?php
				endwhile;
			endif; ?>

</div>
<!-- Tab content -->
<div id="2019" class="tabcontent">
    <?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => '2019',
					'posts_per_page' => 6,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
				
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>

    <?php
					endwhile;
				endif; ?>
</div>
<!-- Tab content -->
<div id="2018" class="tabcontent">
    <?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => '2018',
					'posts_per_page' => 6,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
				
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>

    <?php
					endwhile;
				endif; ?>
</div>
<!-- Tab content -->
<div id="2017" class="tabcontent">
    <?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => '2017',
					'posts_per_page' => 6,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
				
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>

    <?php
					endwhile;
				endif; ?>
</div>
<!-- Tab content -->
<div id="2016" class="tabcontent">
    <?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => '2016',
					'posts_per_page' => 6,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
				
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>

    <?php
					endwhile;
				endif; ?>
</div>
<!-- Tab content -->
<div id="2015" class="tabcontent">
    <?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => '2015',
					'posts_per_page' => 6,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
				
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>

    <?php
					endwhile;
				endif; ?>
</div>
<!-- Tab content -->
<div id="2014" class="tabcontent">
    <?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => '2014',
					'posts_per_page' => 6,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
				
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>

    <?php
					endwhile;
				endif; ?>
</div>
<!-- Tab content -->
<div id="2013" class="tabcontent">
    <?php 
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => '2013',
					'posts_per_page' => 6,
				);
				$arr_posts = new WP_Query( $args );
				
				if ( $arr_posts->have_posts() ) :
					
				
					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
						?>
    <article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="event-header">
            <p><?php the_field('type'); ?></p>
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_field('title'); ?></h2>
            </a>
            <p><?php the_field('when'); ?></p>
        </div>
        <div class="event-info">
            <div class="details"><?php the_field('description'); ?></div>
        </div>
    </article>

    <?php
					endwhile;
				endif; ?>
</div>