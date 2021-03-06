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

		<div class="ticker-tape-small"> <!-- Kontakt Ticker Tape -->
			<div class="inside">
				<svg width="2250" height="28" viewBox="0 0 2250 28">
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

		<div class="ticker-tape-small"> <!-- Der Salon Ticker Tape -->
			<div class="inside">
				<svg class="" width="2148" height="28" viewBox="0 0 2148 28">
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

		<div class="intro-text german">
			<h1>Akteure mit vielfältigstem Background,
			finden im Salon eine Plattform für Ihren Auftritt.
			Hier wird experimentiert, ausgestellt, performed, musiziert, gelesen, nachgedacht und ausgetauscht.
			Die Interaktion steht im Vordergrund,
			weshalb sich der Salon im traditionellen Sinne als Diskursraum versteht.</h1>
		</div>

		<div class="intro-text english">
			<h1>At the Salon, actors from diverse backgrounds find a platform for their performance. 
			Here it’s possible to exhibit, perform, create music, read, reflect and exchange. 
			The focus is on interaction, which is why the salon sees itself as a discourse space in the traditional sense. </h1>
		</div>

		<div class="ticker-tape-small"> <!-- Der Raum Ticker Tape -->

			<div class="inside">
				<svg class="" width="2220" height="28" viewBox="0 0 2220 28">
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

		<div class="slider"> <!-- Slider -->
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</div>

		<div class="ticker-tape-small"> <!-- Kontakt Ticker Tape -->
			<div class="inside">
				<svg class="" width="2110" height="28" viewBox="0 0 2110 28">
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

		<div class="map-home"> <!-- Map -->
			<a href="https://goo.gl/maps/3P34yrDGckZkPXTYA" target="_blank"><img src="https://www.salonammoritzplatz.de/wp-content/uploads/2020/10/201025_SaM-Map-01.jpg" alt="Location Salon am Moritzplatz" /></a>
			<a href="https://goo.gl/maps/3P34yrDGckZkPXTYA" target="_blank"><p class="caption">Oranienstrasse 58, 10969 Berlin-Kreuzberg</p></a>
		</div>

	</main><!-- #main -->

	

<?php
get_sidebar();
get_footer();
