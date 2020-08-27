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
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
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
$when = get_field('when') ?: 'Date and time';
$price = get_field('price') ?: 'Event Price';
$referrer = get_field('referrer') ?: 'Link of the event';
$image = get_field('image') ?: 295;

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="event-cover">
        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
    </div>
    <div class="event-header">
        <p><?php echo $type; ?></p>
        <h2><?php echo $title; ?></h2>
    </div>
    <div class="event-info">
        <div class="left">
            <?php echo $title; ?>
            <?php echo $price; ?>
            <?php echo $referrer; ?>
        </div>
        <div class="right"><?php echo $description; ?></div>
    </div>
</div>