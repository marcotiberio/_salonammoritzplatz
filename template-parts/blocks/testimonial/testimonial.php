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
$className = 'event';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('image') ?: 295;
$date = get_field('date') ?: 'Testimonial date';
$title = get_field('title') ?: 'Testimonial title';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="testimonial-cover">
        <?php 
        $image = get_field('image');
        if( !empty( $ticker_image ) ): ?>
            <?php echo wp_get_attachment_image( $image['id'], 'full' ); ?>
        <?php endif; ?>
    </div>
    <div class="testimonial-info">
        <p><?php echo $date; ?></p>
        <h2><?php echo $title; ?></h2>
    </div>
</div>