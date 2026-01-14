<?php
    $feed_shortcode = get_sub_field('feed_shortcode');
    $feed_title     = get_sub_field('feed_title');

    if(empty($feed_shortcode)) {
        $feed_shortcode = get_field('feed_shortcode', 'option');
    }

    if(empty($feed_title)) {
        $feed_title = get_field('feed_title', 'option');
    }

    // Styles
    $feed_padding = get_sub_field('feed_padding');
    $feed_actif = get_sub_field('feed_actif');

    if($feed_actif and !empty($feed_shortcode)) :
?>

<div class="block_feed container section_padding_<?php echo $feed_padding; ?>">
    <?php if(!empty($feed_title)) : ?>
    <h2 class="text-align-center"><?php echo $feed_title ; ?></h2>
    <?php endif; ?>

    <?php echo do_shortcode( $feed_shortcode ); ?>
</div>
<?php endif; ?>