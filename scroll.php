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

		<!-- Kontakt Ticker Tape -->

		<div class="ticker-tape-small">
			<div class="inside">
				<svg class="first" width="2250" height="28" viewBox="0 0 2250 28">
					<text id="Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_" data-name="Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          " transform="translate(1125 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1124.604" y="0" xml:space="preserve">DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          </tspan></text>
				</svg>
				<svg width="2250" height="28" viewBox="0 0 2250 28">
					<text id="Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_" data-name="Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          " transform="translate(1125 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1124.604" y="0" xml:space="preserve">DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          </tspan></text>
				</svg>
				<svg width="2250" height="28" viewBox="0 0 2250 28">
					<text id="Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_" data-name="Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          " transform="translate(1125 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1124.604" y="0" xml:space="preserve">DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          </tspan></text>
				</svg>
				<svg width="2250" height="28" viewBox="0 0 2250 28">
					<text id="Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_" data-name="Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          " transform="translate(1125 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1124.604" y="0" xml:space="preserve">DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="2250" height="28" viewBox="0 0 2250 28">
					<text id="Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_" data-name="Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          " transform="translate(1125 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1124.604" y="0" xml:space="preserve">DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          </tspan></text>
				</svg>
				<svg width="2250" height="28" viewBox="0 0 2250 28">
					<text id="Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_" data-name="Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          " transform="translate(1125 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1124.604" y="0" xml:space="preserve">DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          </tspan></text>
				</svg>
				<svg width="2250" height="28" viewBox="0 0 2250 28">
					<text id="Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_Das_Programm_" data-name="Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          Das Programm          " transform="translate(1125 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1124.604" y="0" xml:space="preserve">DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          DAS PROGRAMM          </tspan></text>
				</svg>
			</div>
		</div>

			<!-- Kontakt Ticker Tape -->

		<!-- Latest Events -->

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
                                the_post_thumbnail( 'thumbnail-event' );
                            endif;
                            ?>
						</div>
						<div class="event-header">
							<p><?php the_field('type'); ?></p>
							<a href="<?php the_permalink(); ?>"><h2><?php the_field('title'); ?></h2></a>
							<p><?php the_field('when'); ?></p>
							<p><?php the_field('price'); ?></p>
							<button id="booking-<?php the_ID(); ?>"><?php the_field('booking'); ?></button>
						</div>
						<div class="event-info">
							<div class="details">
								<?php $summary = get_field('description');
									$pos=strpos($summary, ' ', 300);
									echo substr($summary,0,$pos ); ?><span> ...</span>
								</div>
							</div>
						</div>

						<!-- Booking Modal -->
						<div id="bookingModal-<?php the_ID(); ?>" class="modal">

						<!-- Booking Modal - Content -->
						<div class="modal-content">
							<span class="close<?php the_ID(); ?>" style="">&times;</span>
							<p><?php the_field('type', false); ?></p>
							<h2><?php the_field('title', false); ?></h2>
							<p><?php the_field('when', false); ?></p>
							<div class="form"><?php the_field('form', false); ?></div>
						</div>

						</div>

						<script>
						// Get the modal
						var modal<?php the_ID(); ?> = document.getElementById("bookingModal-<?php the_ID(); ?>");

						// Get the button that opens the modal
						var btn<?php the_ID(); ?> = document.getElementById("booking-<?php the_ID(); ?>");

						// Get the <span> element that closes the modal
						var span = document.getElementsByClassName("close<?php the_ID(); ?>")[0];

						// When the user clicks the button, open the modal 
						btn<?php the_ID(); ?>.onclick = function () {
							modal<?php the_ID(); ?>.style.display = "block";
						}

						// When the user clicks on <span> (x), close the modal
						span.onclick = function () {
							modal<?php the_ID(); ?>.style.display = "none";
						}

						// When the user clicks anywhere outside of the modal, close it
						window.onclick = function (event) {
							if (event.target == modal<?php the_ID(); ?>) {
								modal<?php the_ID(); ?>.style.display = "none";
							}
						}
						</script>
					</article>

					<?php
				endwhile;
			endif; ?>
		

		</main><!-- #main -->

		<!-- Latest Events -->

		<!-- Der Salon Ticker Tape -->

		<div class="ticker-tape-small">
			<div class="inside">
				<svg class="first" width="2148" height="28" viewBox="0 0 2148 28">
					<text id="Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_" data-name="Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          " transform="translate(1074 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1073.843" y="0" xml:space="preserve">DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          </tspan></text>
				</svg>
				<svg width="2148" height="28" viewBox="0 0 2148 28">
					<text id="Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_" data-name="Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          " transform="translate(1074 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1073.843" y="0" xml:space="preserve">DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          </tspan></text>
				</svg>
				<svg width="2148" height="28" viewBox="0 0 2148 28">
					<text id="Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_" data-name="Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          " transform="translate(1074 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1073.843" y="0" xml:space="preserve">DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          </tspan></text>
				</svg>
				<svg width="2148" height="28" viewBox="0 0 2148 28">
					<text id="Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_" data-name="Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          " transform="translate(1074 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1073.843" y="0" xml:space="preserve">DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="2148" height="28" viewBox="0 0 2148 28">
					<text id="Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_" data-name="Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          " transform="translate(1074 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1073.843" y="0" xml:space="preserve">DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          </tspan></text>
				</svg>
				<svg width="2148" height="28" viewBox="0 0 2148 28">
					<text id="Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_" data-name="Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          " transform="translate(1074 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1073.843" y="0" xml:space="preserve">DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          </tspan></text>
				</svg>
				<svg width="2148" height="28" viewBox="0 0 2148 28">
					<text id="Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_Der_Salon_" data-name="Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          Der Salon          " transform="translate(1074 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1073.843" y="0" xml:space="preserve">DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          DER SALON          </tspan></text>
				</svg>
			</div>
		</div>

		<!-- Der Salon Ticker Tape -->

		<!-- Intro Text -->

		<div class="intro-text">
			<h1><?php the_field('text1', 938); ?></h1>
		</div>

		<!-- Intro Text -->

		<!-- Der Raum Ticker Tape -->

		<div class="ticker-tape-small">
			<div class="inside">
				<svg class="first" width="2220" height="28" viewBox="0 0 2220 28">
					<text id="Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_" data-name="Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          " transform="translate(1110 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1109.355" y="0" xml:space="preserve">DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          </tspan></text>
				</svg>
				<svg width="2220" height="28" viewBox="0 0 2220 28">
					<text id="Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_" data-name="Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          " transform="translate(1110 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1109.355" y="0" xml:space="preserve">DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          </tspan></text>
				</svg>
				<svg width="2220" height="28" viewBox="0 0 2220 28">
					<text id="Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_" data-name="Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          " transform="translate(1110 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1109.355" y="0" xml:space="preserve">DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          </tspan></text>
				</svg>
				<svg width="2220" height="28" viewBox="0 0 2220 28">
					<text id="Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_" data-name="Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          " transform="translate(1110 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1109.355" y="0" xml:space="preserve">DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="2220" height="28" viewBox="0 0 2220 28">
					<text id="Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_" data-name="Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          " transform="translate(1110 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1109.355" y="0" xml:space="preserve">DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          </tspan></text>
				</svg>
				<svg width="2220" height="28" viewBox="0 0 2220 28">
					<text id="Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_" data-name="Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          " transform="translate(1110 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1109.355" y="0" xml:space="preserve">DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          </tspan></text>
				</svg>
				<svg width="2220" height="28" viewBox="0 0 2220 28">
					<text id="Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_Der_Raum_" data-name="Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          Der Raum          " transform="translate(1110 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1109.355" y="0" xml:space="preserve">DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          DER RAUM          </tspan></text>
				</svg>
			</div>
		</div>

		<!-- Der Raum Ticker Tape -->

		<!-- Slider -->

		<div class="slider">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</div>

		<!-- Slider -->

		<!-- Slider Text -->

		<div class="contact-text">
			<h1><?php the_field('text2', 938); ?></h1>
		</div>

		<!-- Slider Text -->

		<!-- Kontakt Ticker Tape -->

		<div class="ticker-tape-small">
			<div class="inside">
				<svg class="first" width="2110" height="28" viewBox="0 0 2110 28">
					<text id="Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_" data-name="Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          " transform="translate(1055 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1054.453" y="0" xml:space="preserve">KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          </tspan></text>
				</svg>
				<svg width="2110" height="28" viewBox="0 0 2110 28">
					<text id="Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_" data-name="Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          " transform="translate(1055 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1054.453" y="0" xml:space="preserve">KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          </tspan></text>
				</svg>
				<svg width="2110" height="28" viewBox="0 0 2110 28">
					<text id="Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_" data-name="Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          " transform="translate(1055 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1054.453" y="0" xml:space="preserve">KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          </tspan></text>
				</svg>
				<svg width="2110" height="28" viewBox="0 0 2110 28">
					<text id="Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_" data-name="Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          " transform="translate(1055 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1054.453" y="0" xml:space="preserve">KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          </tspan></text>
				</svg>
				<!-- repeated images below to keep up with animation -->
				<svg width="2110" height="28" viewBox="0 0 2110 28">
					<text id="Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_" data-name="Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          " transform="translate(1055 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1054.453" y="0" xml:space="preserve">KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          </tspan></text>
				</svg>
				<svg width="2110" height="28" viewBox="0 0 2110 28">
					<text id="Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_" data-name="Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          " transform="translate(1055 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1054.453" y="0" xml:space="preserve">KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          </tspan></text>
				</svg>
				<svg width="2110" height="28" viewBox="0 0 2110 28">
					<text id="Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_Kontakt_" data-name="Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          Kontakt          " transform="translate(1055 22)" fill="#e6e6e6" font-size="20" font-family="sam-arial-black" font-weight="800"><tspan x="-1054.453" y="0" xml:space="preserve">KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          KONTAKT          </tspan></text>
				</svg>
			</div>
		</div>

		<!-- Kontakt Ticker Tape -->

		<!-- Map -->

		<div class="map-home">
			<?php 
			$map = get_field('map');
			$caption = $map['caption'];
			if( !empty( $map ) ): ?>
				<a href="https://goo.gl/maps/3P34yrDGckZkPXTYA" target="_blank"><img src="<?php echo esc_url($map['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
				<a href="https://goo.gl/maps/3P34yrDGckZkPXTYA" target="_blank"><p class="caption"><?php echo esc_html($caption); ?></p></a>
			<?php endif; ?>

		</div>

		<!-- Map -->


	</main><!-- #main -->

	

<?php
get_sidebar();
get_footer();
