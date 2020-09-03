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

</main><!-- #main -->

<!-- Booking Modal -->
<div id="bookingModal" class="modal">

	<!-- Booking Modal - Content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<p><?php the_field('type'); ?></p>
		<h2><?php the_field('title'); ?></h2>
		<p><?php the_field('when'); ?></p>
		<div class="form"><?php the_field('form'); ?></div>
	</div>

</div>

<script>
	// Get the modal
	var modal = document.getElementById("bookingModal");

	// Get the button that opens the modal
	var btn = document.getElementById("booking");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function () {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function () {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>

<?php
get_sidebar();
get_footer();