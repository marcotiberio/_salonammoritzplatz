<?php

/**
 * Event Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'event-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'event';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('title') ?: 'Event title';
$type = get_field('type') ?: 'Event type';
$description = get_field('description') ?: 'Event Description';
// $details = get_field('details') ?: 'Event Details';
$when = get_field('when') ?: 'Date and time';
$price = get_field('price') ?: 'Event Price';
$booking = get_field('booking') ?: 'Where to book';
$referrer = get_field('referrer') ?: 'Link of the event';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="event-header">
        <p><?php echo $type; ?></p>
        <h2><?php echo $title; ?></h2>
    </div>
    <div class="event-info">
        <div class="left">
            <p><?php echo $when; ?></p>
            <p><?php echo $price; ?></p>
            <p class="booking"><?php echo $booking; ?></p>
            <p><?php echo $referrer; ?></p>
        </div>
        <div class="right">
            <div class="details"><?php echo $description; ?></div>
        </div>
    </div>
</div>

<!-- Booking Modal -->
<div id="bookingModal" class="modal">

  <!-- Booking Modal - Content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("bookingModal");

// Get the button that opens the modal
var btn = document.getElementByClassName("booking");

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