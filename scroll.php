<?php
/**
 * Template Name: Scroll
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package salonammoritzplatz
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- Cover Image -->

		<div class="cover-image">
			<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/background-home-scaled.jpg" alt="">
		</div>

		<!-- Cover Image -->

		<!-- Latest Events -->

		<?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 3,
			);
			$arr_posts = new WP_Query( $args );
			 
			if ( $arr_posts->have_posts() ) :
			 
				while ( $arr_posts->have_posts() ) :
					$arr_posts->the_post();
					?>
					<div class="latestpost--custom" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="event-cover">
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail( 'full' );
                            endif;
                            ?>
						</div>
						<div class="event-title">
                            <?php the_field('details'); ?>
                        </div>
                        <div class="event-intro">
                            <?php the_field('description'); ?>
                        </div>
					</article>
					<?php
				endwhile;
			endif; ?>

			<!-- Latest Events -->

			<!-- Der Salon Ticker Tape -->

			<div class="ticker-tape-small">
				<div class="inside">
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<!-- repeated images below to keep up with animation -->
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
				</div>
			</div>

			<!-- Der Salon Ticker Tape -->

			<!-- Intro Text -->

			<div class="intro-text">
				<h1>
					In einer Stadt, in der Raum und Zeit immer knapper wird, wollen wir Freiräume erhalten und schaffen, in denen 
					Menschen in Kontakt kommen können, um Ihre Begeisterung, Ihr Wissen und Ihre Begabungen mit anderen zu teilen.
				</h1>
			</div>

			<!-- Intro Text -->

			<!-- Der Raum Ticker Tape -->

			<div class="ticker-tape-small">
				<div class="inside">
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<!-- repeated images below to keep up with animation -->
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
				</div>
			</div>

			<!-- Der Raum Ticker Tape -->

			<!-- Slider -->



			<!-- Slider -->

			<!-- Slider Text -->



			<!-- Slider Text -->

			<!-- Kontakt Ticker Tape -->

			<div class="ticker-tape-small">
				<div class="inside">
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<!-- repeated images below to keep up with animation -->
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
					<svg class="first" width="2058" height="28" viewBox="0 0 2058 28">
						<text id="Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_Salon_am_Moritzplatz_" data-name="Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         Salon am Moritzplatz         " transform="translate(1029 22)" fill="#3e3e3e" font-size="20" font-family="Arial-Black, Arial Black" font-weight="800"><tspan x="-1028.203" y="0" xml:space="preserve">SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         SALON AM MORITZPLATZ         </tspan></text>
					</svg>
				</div>
			</div>

			<!-- Kontakt Ticker Tape -->

			<!-- Map -->

			<div class="map-home">
				<img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/08/map-e1598525867988.png" alt="">
			</div>

			<!-- Map -->


			




	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
