<?php
    $slider_text_infinity_text     = get_sub_field('slider_text_infinity_text');
    $slider_text_infinity_actif    = get_sub_field('slider_text_infinity_actif');
    $slider_text_infinity_padding  = get_sub_field('slider_text_infinity_padding');
    $slider_text_infinity_bg_color = get_sub_field('block_slider_text_infinity_slider_text_infinity_bg');

    if($slider_text_infinity_actif && !empty($slider_text_infinity_text)) :
?>

<div class="block_text_infinity text_infinity text_infinity-js m-<?php echo $slider_text_infinity_padding; ?> text_infinity_bg_<?php echo $slider_text_infinity_bg_color; ?>">
    <?php for($i = 0; $i <= 1; $i++) : ?>
    <div class="text_infinity_text<?php echo $i === 1? '_copy' : '';?>">
        <p class="h3"> <?php echo $slider_text_infinity_text; ?></p>
    </div>
    <?php endfor; ?>
</div>

<?php endif; ?>