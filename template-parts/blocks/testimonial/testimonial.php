<?php

/**
 * Testimonial Block Template.
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
$testimonial_image = get_field('image') ?: 295;
$date = get_field('date') ?: 'Testimonial date';
$title = get_field('title') ?: 'Testimonial title';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="testimonial-cover">
        <?php 
            $testimonial_image = get_field('image');
            if( !empty( $testimonial_image ) ): ?>
                <?php echo wp_get_attachment_image( $testimonial_image['id'], 'full' ); ?>
        <?php endif; ?>
    </div>
    <div class="testimonial-info">
        <p><?php echo $date; ?></p>
        <h2>
        <?php 
            $link = get_field('title');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </h2>
    </div>
</div>