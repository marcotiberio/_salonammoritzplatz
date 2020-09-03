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

<!-- Booking Modal -->
<div id="bookingModal" class="modal">

  <!-- Booking Modal - Content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><?php echo $type; ?></p>
    <h2><?php echo $title; ?></h2>
    <p><?php echo $when; ?></p>
    <div class="form"><?php echo $form; ?></div>
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
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
</script>
