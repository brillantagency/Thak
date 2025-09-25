<?php
  $cta_type    = get_sub_field('cta_type');
  $cta_link    = get_sub_field('cta_link');
  $cta_text    = get_sub_field('cta_text');
  $cta_padding = get_sub_field('cta_padding');
  $cta_actif   = get_sub_field('cta_actif');
  $cta_bigtext = get_sub_field('cta_big_text');
  $cta_hover   = get_sub_field('cta_hover');

  if ($cta_actif and $cta_link or $cta_text) :
?>

<div class="block-cta padding_<?php echo $cta_padding; ?> container">
  <a href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>" class="block-cta_link">
    <?php if (!empty($cta_text)) : ?>
    <span class="block-cta-title h2">
        <?php echo $cta_text; ?>
        
        <?php if (!empty($cta_text) && !empty($cta_bigtext)) : ?>
        <br>
        <?php endif; ?>

        <?php if (!empty($cta_bigtext)) : ?>
        <strong><?php echo $cta_bigtext; ?></strong>
        <?php endif; ?>
      </span>
    <?php endif; ?>

    <?php if (!empty($cta_hover['url'])) : ?>
    <img class="mascotte" src="<?php echo $cta_hover['url']; ?>" alt="<?php echo $cta_hover['alt']; ?>">
    <?php else : ?>
    <img class="mascotte" alt="Illustration d'une mascotte" src="<?php echo get_template_directory_uri(); ?>/dist/images/mascotte.png">
    <?php endif; ?>

  </a>
</div>
<?php endif; ?>