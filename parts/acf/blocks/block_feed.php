<?php
    $feed = get_sub_field('feed_shortcode');

    if(empty($feed)) {
        $feed = get_sub_field('feed_shortcode', 'option');
    }

    // Styles
    $feed_padding = get_sub_field('feed_padding');
    $feed_actif = get_sub_field('feed_actif');

    if($feed_actif and !empty($feed)) :
?>

<div class="block_feed container p-<?php echo $feed_padding; ?>">
    <?php echo do_shortcode( $feed ); ?>
</div>
<?php endif; ?>