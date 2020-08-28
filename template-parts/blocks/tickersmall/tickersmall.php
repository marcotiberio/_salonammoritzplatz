<?php

/**
 * Small Ticker Tape Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'tickersmall-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'tickersmall';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$ticker_image = get_field('ticker_image') ?: 295;

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="ticker-tape-small">
        <div class="inside">
            <?php 
            $ticker_image = get_field('ticker_image');
            if( !empty( $ticker_image ) ): ?>
                <div><?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?></div>
                <?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?>
                <?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?>
                <?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?>
                <?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?>
                <!-- repeated images below to keep up with animation -->
                <?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?>
                <?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?>
                <?php echo wp_get_attachment_image( $ticker_image['id'], 'full' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>