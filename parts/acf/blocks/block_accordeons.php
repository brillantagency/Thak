<?php 

    $accordeons_title    = get_sub_field('block_accordeons_accordeons_title');
    $accordeons_cta      = get_sub_field('block_accordeons_accordeons_button');
    $accordeons_text     = get_sub_field('block_accordeons_accordeons_text');
    $accordeons_repeater = get_sub_field('block_accordeons_accordeons_repeater');

    // Styles
    $accordeons_actif      = get_sub_field('block_accordeons_accordeons_actif');
    $accordeons_padding    = get_sub_field('block_accordeons_accordeons_padding');
    $accordeons_link_style = get_sub_field('block_accordeons_accordeons_link_style');
    $accordeons_direction  = get_sub_field('block_accordeons_accordeons_flex_direction');

    if(!empty($accordeons_title)) {
        $tag = 'section';
    } else {
        $tag = 'div';
    }

    if($accordeons_actif) :
?>

<<?php echo $tag; ?> class="block_accordeons flex_direction_<?php echo $accordeons_direction? 'column' : 'row'; ?> container section_padding_<?php echo $accordeons_padding; ?>">
    <div class="accordeons_intro">
        <?php if(!empty($accordeons_title)) : ?>
        <h2 class="accordeons_title"><?php echo $accordeons_title; ?></h2>
        <?php endif; ?>

        <?php if(!empty($accordeons_text)) : ?>
        <div class="accordeons_text"><?php echo $accordeons_text; ?></div>
        <?php endif; ?>

        <?php if(!empty($accordeons_cta)) :  ?>
        <a href="<?php echo $accordeons_cta['url']; ?>" <?php echo $accordeons_cta['target']? 'target="_blank" rel="noopener noreferrer"' : ''; ?> class="cta--border"><?php echo $accordeons_cta['title']; ?></a>
        <?php endif; ?>
    </div>

    <div class="accordeons_repeater">
        <?php foreach($accordeons_repeater as $accordeon) :  ?>
        <div class="accordeon">
            <?php if(!empty($accordeon['title'])) : ?>
            <button role="button" class="h4 accordeon_button accordeons_button-js">
                <span><?php echo $accordeon['tag']? '<span class="accordeon_button_tag">' . $accordeon['tag'] . '</span>' :''; ?> <?php echo $accordeon['title']; ?> </span>
                <span class="accordeon_button_fake"></span>
            </button>
            <?php endif; ?>

            <?php if(!empty($accordeon['text'])) : ?>
            <div class="accordeon_text"><?php echo $accordeon['text']; ?></div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>

    </div>
</<?php echo $tag; ?>>
<?php endif; ?>